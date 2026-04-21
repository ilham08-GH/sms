<?php 
/**
 * Copy_spk_to_detail Page Controller
 * @category  Controller
 */
class Copy_spk_to_detailController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "copy_spk_to_detail";
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

        // =============================
        // VALIDASI ID MATRIK
        // =============================
        $id_matrik_honor = $_GET['id_matrik_honor'] ?? null;
        if (!$id_matrik_honor) {
            $this->set_flash_msg("ID Matrik Honor tidak ditemukan", "danger");
            return $this->redirect("detail_matrik_honor");
        }

        // =============================
        // DATA UNTUK VIEW
        // =============================
        $this->view_data = [];
        $this->view_data['id_matrik_honor'] = $id_matrik_honor;

        $this->view_data['nama_survei'] = $db->rawQuery("
            SELECT DISTINCT nama_survei
            FROM copy_petugas_view
            ORDER BY nama_survei
        ");

        //$this->view_data['bulan_tahun'] = $db->rawQuery("
        //    SELECT DISTINCT bulan_tahun
        //    FROM copy_petugas_view
        //    ORDER BY kode_bulan
        //");

        $this->view_data['bulan_tahun'] = $db->rawQuery("
    SELECT DISTINCT bulan_tahun
    FROM copy_petugas_view
    ORDER BY STR_TO_DATE(bulan_tahun, '%M %Y') DESC
    LIMIT 13
");


        // =============================
        // AMBIL DATA TAHUN BERJALAN DAN DESEMBER TAHUN SEBELUMNYA
        // =============================
        


        // =============================
        // PROSES COPY (POST)
        // =============================
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nama_survei = $_POST['nama_survei'] ?? '';
    $bulan_tahun = $_POST['bulan_tahun'] ?? '';

    if (!$nama_survei || !$bulan_tahun) {
        $this->set_flash_msg("Nama survei dan bulan harus dipilih", "danger");
        return $this->redirect(
            "copy_spk_to_detail?id_matrik_honor=".$id_matrik_honor
        );
    }

    // =============================
    // CEK DUPLIKAT TOTAL
    // =============================
    $cek_duplikat = $db->rawQueryOne("
        SELECT COUNT(*) AS total
        FROM copy_petugas_view v
        JOIN detail_matrik_honor d
            ON d.id_matrik_honor = ?
           AND d.id_petugas = v.id_petugas
        WHERE v.nama_survei = ?
          AND v.bulan_tahun = ?
    ", [$id_matrik_honor, $nama_survei, $bulan_tahun]);

    if ($cek_duplikat['total'] > 0) {
        $this->set_flash_msg(
            "⚠️ Data duplikat ditemukan. Proses copy dibatalkan.",
            "warning"
        );
        return $this->redirect(
            "copy_spk_to_detail?id_matrik_honor=".$id_matrik_honor
        );
    }

    // =============================
    // AMBIL BULAN & TAHUN MATRIK
    // =============================
    $matrik = $db->rawQueryOne("
        SELECT id_bulan_pelaksanaan, tahun
        FROM matrik_honor
        WHERE id = ?
    ", [$id_matrik_honor]);

    $bulan = $matrik['id_bulan_pelaksanaan'];
    $tahun = $matrik['tahun'];


    // =============================
    // CEK SPK SUDAH DICETAK
    // =============================
    $cek_spk = $db->rawQueryOne("
        SELECT COUNT(*) AS total
        FROM detail_matrik_honor d
        JOIN matrik_honor m ON m.id = d.id_matrik_honor
        JOIN copy_petugas_view v ON v.id_petugas = d.id_petugas
        WHERE v.nama_survei = ?
        AND v.bulan_tahun = ?
        AND m.id_bulan_pelaksanaan = ?
        AND m.tahun = ?
        AND d.status_spk = 1
    ", [$nama_survei, $bulan_tahun, $bulan, $tahun]);

    if ($cek_spk['total'] > 0) {
        $this->set_flash_msg(
            "🚫 SPK petugas ada yang sudah dicetak. Proses copy petugas tidak dapat dilakukan.",
            "danger"
        );

        return $this->redirect(
            "copy_spk_to_detail?id_matrik_honor=".$id_matrik_honor
        );
    }


    // =============================
    // AMBIL PETUGAS
    // =============================
    $petugas_list = $db->rawQuery("
        SELECT 
            v.id_petugas,
            v.nama_petugas,
            v.id_jabatan,
            v.volume_spk,
            v.volume_bast,
            v.id_satuan,
            v.harga_satuan,
            v.total,
            v.id_rincian_output
        FROM copy_petugas_view v
        WHERE v.nama_survei = ?
          AND v.bulan_tahun = ?
    ", [$nama_survei, $bulan_tahun]);

    $petugas_lolos   = [];
    $petugas_langgar = [];

    foreach ($petugas_list as $p) {

        // Ambil jabatan
        $jab = $db->rawQueryOne("
            SELECT keterangan_jabatan
            FROM master_jabatan_petugas
            WHERE id = ?
        ", [$p['id_jabatan']]);

        if (!$jab) {
            $petugas_langgar[] = "{$p['nama_petugas']} (jabatan belum disetting)";
            continue;
        }

        // Ambil SBML
        $sbml = $db->rawQueryOne("
            SELECT sbml
            FROM master_sbml
            WHERE jabatan = ?
        ", [$jab['keterangan_jabatan']]);

        if (!$sbml) {
            $petugas_langgar[] = "{$p['nama_petugas']} (SBML belum disetting)";
            continue;
        }

        $batas = (int)$sbml['sbml'];

        // Hitung total existing
        $row = $db->rawQueryOne("
            SELECT IFNULL(SUM(r.total),0) AS total_existing
            FROM detail_matrik_honor r
            JOIN matrik_honor m ON m.id = r.id_matrik_honor
            WHERE r.id_petugas = ?
              AND m.id_bulan_pelaksanaan = ?
              AND m.tahun = ?
        ", [$p['id_petugas'], $bulan, $tahun]);

        $total_existing = (int)$row['total_existing'];
        $total_akhir = $total_existing + (int)$p['total'];

        if ($total_akhir > $batas) {
            $petugas_langgar[] =
                "{$p['nama_petugas']} (Rp "
                . number_format($total_akhir)
                . " > Rp "
                . number_format($batas)
                . ")";
            continue;
        }

        $petugas_lolos[] = $p;
    }

    // =============================
    // INSERT YANG LOLOS
    // =============================
    foreach ($petugas_lolos as $p) {
        $db->rawQuery("
            INSERT INTO detail_matrik_honor (
                id_matrik_honor,
                id_petugas,
                jabatan,
                volume_spk,
                volume_bast,
                satuan,
                harga_satuan,
                total,
                cek_double,
                rincian_output_detail
            ) VALUES (
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
            )
        ", [
            $id_matrik_honor,
            $p['id_petugas'],
            $p['id_jabatan'],
            $p['volume_spk'],
            $p['volume_bast'],
            $p['id_satuan'],
            $p['harga_satuan'],
            $p['total'],
            $id_matrik_honor.$p['id_petugas'],
            $p['id_rincian_output']
        ]);
    }

    // =============================
    // FLASH MESSAGE
    // =============================
    $msg = "";

    if (!empty($petugas_langgar)) {
        $msg .= "<b>⚠️ Petugas tidak di-copy karena melebihi SBML:</b><br>";
        $msg .= implode("<br>", $petugas_langgar);
        $msg .= "<br><br>";
    }

    if (!empty($petugas_lolos)) {
        $msg .= "✅ <b>" . count($petugas_lolos) . " petugas berhasil di-copy</b>";
    }

    if ($msg) {
        $this->set_flash_msg($msg, empty($petugas_langgar) ? "success" : "warning");
    }


            return $this->redirect("matrik_honor");
    }

    // =============================
    // TAMPILKAN VIEW (GET)
    // =============================
    $this->render_view("custom/copy_spk_to_detail.php", $this->view_data);
}
}
