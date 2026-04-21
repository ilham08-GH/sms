<?php 
/**
 * Ed_detail_matrik_honor Page Controller
 * @category  Controller
 */
 
require_once ROOT . "libs/PhpSpreadsheet/autoload.php";
use PhpOffice\PhpSpreadsheet\IOFactory;

 
class Ed_detail_matrik_honorController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "ed_detail_matrik_honor";
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function index()
    {
        $db = $this->GetModel();

        /* =====================================================
         * GET → SIMPAN CONTEXT KE SESSION
         * ===================================================== */
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $id_matrik_honor = $_GET['id_matrik_honor'] ?? null;
            $rincian_output_detail = $_GET['rincian_output_detail'] ?? null;

            if (!$id_matrik_honor) {
                $this->set_flash_msg("ID Matrik Honor tidak ditemukan", "danger");
                return redirect_to_page("detail_matrik_honor");
            }

            $_SESSION['UPLOAD_MATRIK_HONOR_ID'] = $id_matrik_honor;
            $_SESSION['UPLOAD_RINCIAN_OUTPUT'] = $rincian_output_detail;

            $this->view_data['id_matrik_honor'] = $id_matrik_honor;
            $this->view_data['rincian_output_detail'] = $rincian_output_detail;

            return $this->render_view("ed_detail_matrik_honor/list.php");
        }

        /* =====================================================
         * POST → IMPORT EXCEL
         * ===================================================== */
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id_matrik_honor = $_SESSION['UPLOAD_MATRIK_HONOR_ID'] ?? null;
            $rincian_output_detail = $_SESSION['UPLOAD_RINCIAN_OUTPUT'] ?? null;

            if (!$id_matrik_honor) {
                $this->set_flash_msg("Session upload hilang", "danger");
                return redirect_to_page("detail_matrik_honor");
            }

            if (!isset($_FILES['file_excel']) || $_FILES['file_excel']['error'] !== UPLOAD_ERR_OK) {
                $this->set_flash_msg("File Excel belum dipilih", "danger");
                return redirect_to_page("ed_detail_matrik_honor");
            }

            $success = 0;
            $failed = [];

            try {

                /* === INFO MATRIK === */
                $matrik = $db->rawQueryOne(
                    "SELECT id_bulan_pelaksanaan, tahun FROM matrik_honor WHERE id = ?",
                    [$id_matrik_honor]
                );

                if (!$matrik) {
                    throw new Exception("Data matrik honor tidak ditemukan");
                }

                $bulan = $matrik['id_bulan_pelaksanaan'];
                $tahun = $matrik['tahun'];

                $spreadsheet = IOFactory::load($_FILES['file_excel']['tmp_name']);
                $rows = $spreadsheet->getActiveSheet()->toArray();

                foreach ($rows as $i => $row) {

                    if ($i === 0) continue; // header

                    [$id_petugas, $id_jabatan, $volume, $id_satuan, $harga_satuan] = $row;

                    if (!$id_petugas) continue;

                    $volume = (int)$volume;
                    $harga_satuan = (int)$harga_satuan;
                    $total = $volume * $harga_satuan;

                    /* === CEK MASTER PETUGAS APAKAH IDNYA ADA=== */
                    $cek_petugas = $db->rawQueryOne(
                        "SELECT id FROM master_petugas WHERE id=?",
                        [$id_petugas]
                    );

                    if (!$cek_petugas) {
                        // id_petugas tidak ditemukan di master_petugas
                        // skip baris ini, tidak diinsert
                        continue; // lanjut ke baris berikutnya
                    }
                    
                    /* === CEK MASTER JABATAN PETUGAS === */
                    $cek_jabatan = $db->rawQueryOne(
                        "SELECT id FROM master_jabatan_petugas WHERE id = ?",
                        [$id_jabatan]
                    );
                    
                    if (!$cek_jabatan) {
                        // id_jabatan tidak ditemukan di master_jabatan_petugas
                        continue; // skip baris ini
                    }
                    
                    /* === CEK MASTER SATUAN === */
                    $cek_satuan = $db->rawQueryOne(
                        "SELECT id FROM master_satuan WHERE id = ?",
                        [$id_satuan]
                    );
                    
                    if (!$cek_satuan) {
                        // id_satuan tidak ditemukan di master_satuan
                        continue; // skip baris ini
                    }

                    /* === CEK SPK SUDAH DICETAK === */
                    $cek_spk = $db->rawQueryOne(
                        "SELECT 1
                        FROM detail_matrik_honor r
                        JOIN matrik_honor m ON m.id = r.id_matrik_honor
                        WHERE r.id_petugas = ?
                        AND m.id_bulan_pelaksanaan = ?
                        AND m.tahun = ?
                        AND r.status_spk = 1
                        LIMIT 1",
                        [$id_petugas, $bulan, $tahun]
                    );

                    if ($cek_spk) {
                        $failed[] = "$id_petugas (SPK sudah dicetak)";
                        continue;
                    }


                    /* === CEK DUPLIKAT === */
                    $dup = $db->rawQueryOne(
                        "SELECT COUNT(*) AS total 
                         FROM detail_matrik_honor 
                         WHERE id_matrik_honor=? AND id_petugas=?",
                        [$id_matrik_honor, $id_petugas]
                    );

                    if ($dup['total'] > 0) {
                        $failed[] = "$id_petugas (Duplikat)";
                        continue;
                    }

                    /* === AMBIL JABATAN === */
                    $jab = $db->rawQueryOne(
                        "SELECT keterangan_jabatan FROM master_jabatan_petugas WHERE id=?",
                        [$id_jabatan]
                    );

                    if (!$jab) {
                        $failed[] = "$id_petugas (Jabatan belum disetting)";
                        continue;
                    }

                    /* === AMBIL SBML === */
                    $sbml = $db->rawQueryOne(
                        "SELECT sbml FROM master_sbml WHERE jabatan=?",
                        [$jab['keterangan_jabatan']]
                    );

                    if (!$sbml) {
                        $failed[] = "$id_petugas (SBML belum disetting)";
                        continue;
                    }

                    $batas = (int)$sbml['sbml'];

                    /* === TOTAL BULAN BERJALAN === */
                    $existing = $db->rawQueryOne(
                        "SELECT IFNULL(SUM(r.total),0) AS total_existing
                         FROM detail_matrik_honor r
                         JOIN matrik_honor m ON m.id=r.id_matrik_honor
                         WHERE r.id_petugas=? AND m.id_bulan_pelaksanaan=? AND m.tahun=?",
                        [$id_petugas, $bulan, $tahun]
                    );

                    $total_akhir = $existing['total_existing'] + $total;

                    if ($total_akhir > $batas) {
                        $failed[] = "$id_petugas (Rp ".number_format($total_akhir)." > Rp ".number_format($batas).")";
                        continue;
                    }


                      /* === HAPUS JIKA ADA ID PETUGAS DUA BARIS ATAU LEBIH === */
                    //$unique_rows = [];
                    //foreach ($rows as $i => $row) {
                    //    if ($i === 0) continue; // header
                    //    $id_petugas = $row[0];
                    //    if (isset($unique_rows[$id_petugas])) continue; // skip duplikat Excel
                    //    $unique_rows[$id_petugas] = $row;
                    //}


                    /* === INSERT === */
                    $db->insert("detail_matrik_honor", [
                        "id_matrik_honor"       => $id_matrik_honor,
                        "id_petugas"            => $id_petugas,
                        "jabatan"               => $id_jabatan,
                        "volume_spk"            => $volume,
                        "volume_bast"           => $volume,
                        "satuan"                => $id_satuan,
                        "harga_satuan"          => $harga_satuan,
                        "total"                 => $total,
                        "cek_double"            => $id_matrik_honor.$id_petugas,
                        "rincian_output_detail" => $rincian_output_detail
                    ]);

                    $success++;
                }

                /* === SIMPAN REPORT === */
                $_SESSION['IMPORT_SUCCESS'] = $success;
                $_SESSION['IMPORT_FAILED']  = $failed;

                return redirect_to_page("ed_detail_matrik_honor/result");

            } catch (Exception $e) {

                $this->set_flash_msg("Gagal import: ".$e->getMessage(), "danger");
                return redirect_to_page("ed_detail_matrik_honor");
            }
        }
    }

    /* =====================================================
     * RESULT PAGE
     * ===================================================== */
    //function result()
    //{
    //    $this->view_data['success'] = $_SESSION['IMPORT_SUCCESS'] ?? 0;
    //    $this->view_data['failed']  = $_SESSION['IMPORT_FAILED'] ?? [];

    //    unset($_SESSION['IMPORT_SUCCESS']);
    //    unset($_SESSION['IMPORT_FAILED']);

        //$this->render_view("ed_detail_matrik_honor/result.php");
    //    $this->view_data['success'] = $success;
   // $this->view_data['failed']  = $failed;

    //return $this->render_view("ed_detail_matrik_honor/result.php");

   // }
  function result()
{
    $success = $_SESSION['import_success'] ?? 0;
    $failed  = $_SESSION['import_error'] ?? [];

    // flash message untuk ringkasan
    $this->set_flash_msg(
    "Import selesai, cek jika ada data petugas yang tidak masuk:<br>
    <ol>
        <li>Ada data duplikat</li>
        <li>Honor melebihi SBML</li>
        <li>ID Petugas tidak ada di master petugas</li>
        <li>ID Satuan tidak ada di master satuan</li>
        <li>ID Jabatan tidak ada di master jabatan</li>
        <li>SPK Petugas tersebut sudah dicetak</li>
    </ol>",
    "warning"
);


    // kirim detail gagal ke view
    $this->view_data['success'] = $success;
    $this->view_data['failed']  = $failed;

    // bersihkan session
    unset($_SESSION['import_success'], $_SESSION['import_error']);

    return redirect_to_page("matrik_honor");
    
}


}
