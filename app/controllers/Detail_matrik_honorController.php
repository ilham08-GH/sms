<?php 
/**
 * Detail_matrik_honor Page Controller
 * @category  Controller
 */
class Detail_matrik_honorController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "detail_matrik_honor";
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function index($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("detail_matrik_honor.id", 
			"master_petugas.nama_petugas AS master_petugas_nama_petugas", 
			"master_petugas.alamat AS master_petugas_alamat", 
			"master_petugas.kecamatan AS master_petugas_kecamatan", 
			"detail_matrik_honor.volume_spk", 
			"detail_matrik_honor.volume_bast", 
			"detail_matrik_honor.harga_satuan", 
			"master_satuan.satuan AS master_satuan_satuan", 
			"detail_matrik_honor.total", 
			"volume_bast*harga_satuan AS total_bast", 
			"detail_matrik_honor.kak", 
			"detail_matrik_honor.sk", 
			"detail_matrik_honor.spk_ttd", 
			"detail_matrik_honor.bast_ttd", 
			"detail_matrik_honor.selesai_fp", 
			"detail_matrik_honor.pengajuan_spm", 
			"detail_matrik_honor.terbit_sp2d", 
			"detail_matrik_honor.tgl_sp2d", 
			"matrik_honor.uraian_kegiatan AS matrik_honor_uraian_kegiatan", 
			"matrik_honor.tahun AS matrik_honor_tahun", 
			"master_bulan.bulan AS master_bulan_bulan");
		$pagination = $this->get_pagination(1000); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				detail_matrik_honor.id LIKE ? OR 
				detail_matrik_honor.id_matrik_honor LIKE ? OR 
				detail_matrik_honor.id_petugas LIKE ? OR 
				detail_matrik_honor.jabatan LIKE ? OR 
				master_petugas.nama_petugas LIKE ? OR 
				master_petugas.alamat LIKE ? OR 
				master_petugas.kecamatan LIKE ? OR 
				detail_matrik_honor.volume_spk LIKE ? OR 
				detail_matrik_honor.volume_bast LIKE ? OR 
				detail_matrik_honor.harga_satuan LIKE ? OR 
				matrik_honor.harga_satuan_honor LIKE ? OR 
				master_satuan.satuan LIKE ? OR 
				detail_matrik_honor.satuan LIKE ? OR 
				detail_matrik_honor.total LIKE ? OR 
				detail_matrik_honor.cek_double LIKE ? OR 
				detail_matrik_honor.status_spk LIKE ? OR 
				detail_matrik_honor.id_spk LIKE ? OR 
				detail_matrik_honor.status_bast LIKE ? OR 
				detail_matrik_honor.id_bast LIKE ? OR 
				detail_matrik_honor.rincian_output_detail LIKE ? OR 
				detail_matrik_honor.total_bast LIKE ? OR 
				detail_matrik_honor.kak LIKE ? OR 
				detail_matrik_honor.sk LIKE ? OR 
				detail_matrik_honor.spk_ttd LIKE ? OR 
				detail_matrik_honor.bast_ttd LIKE ? OR 
				detail_matrik_honor.selesai_fp LIKE ? OR 
				detail_matrik_honor.pengajuan_spm LIKE ? OR 
				detail_matrik_honor.terbit_sp2d LIKE ? OR 
				detail_matrik_honor.tgl_sp2d LIKE ? OR 
				master_petugas.id LIKE ? OR 
				master_petugas.nik LIKE ? OR 
				master_petugas.pekerjaan LIKE ? OR 
				master_petugas.email LIKE ? OR 
				master_petugas.sobat_id LIKE ? OR 
				master_petugas.jabatan LIKE ? OR 
				master_petugas.status_petugas LIKE ? OR 
				master_jabatan_petugas.id LIKE ? OR 
				master_jabatan_petugas.jabatan LIKE ? OR 
				master_jabatan_petugas.keterangan_jabatan LIKE ? OR 
				master_satuan.id LIKE ? OR 
				matrik_honor.id LIKE ? OR 
				matrik_honor.id_tim LIKE ? OR 
				matrik_honor.id_rincian_output LIKE ? OR 
				matrik_honor.id_nama_survei LIKE ? OR 
				matrik_honor.uraian_kegiatan LIKE ? OR 
				matrik_honor.id_bulan_pelaksanaan LIKE ? OR 
				matrik_honor.tahun LIKE ? OR 
				matrik_honor.jangka_waktu LIKE ? OR 
				matrik_honor.cek_double LIKE ? OR 
				matrik_honor.no_surat_spk LIKE ? OR 
				matrik_honor.no_surat_bast LIKE ? OR 
				matrik_honor.create_by LIKE ? OR 
				matrik_honor.create_at LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				master_bulan.kode_bulan LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "detail_matrik_honor/search.php";
		}
		$db->join("master_petugas", "detail_matrik_honor.id_petugas = master_petugas.id", "INNER");
		$db->join("master_jabatan_petugas", "detail_matrik_honor.jabatan = master_jabatan_petugas.id", "INNER");
		$db->join("master_satuan", "detail_matrik_honor.satuan = master_satuan.id", "INNER");
		$db->join("matrik_honor", "detail_matrik_honor.id_matrik_honor = matrik_honor.id", "INNER");
		$db->join("master_bulan", "matrik_honor.id_bulan_pelaksanaan = master_bulan.id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("master_petugas_kecamatan", "ASC");
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $pagination, $fields);
		$records_count = count($records);
		$total_records = intval($tc->totalCount);
		$page_limit = $pagination[1];
		$total_pages = ceil($total_records / $page_limit);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = $records_count;
		$data->total_records = $total_records;
		$data->total_page = $total_pages;
		if($db->getLastError()){
			$this->set_page_error();
		}
		$page_title = $this->view->page_title = "Detail Matrik Honor";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("detail_matrik_honor/list.php", $data); //render the full page
	}
	/**
     * View record detail 
	 * @param $rec_id (select record by table primary key) 
     * @param $value value (select record by value of field name(rec_id))
     * @return BaseView
     */
	function view($rec_id = null, $value = null){
		$request = $this->request;
		$db = $this->GetModel();
		$rec_id = $this->rec_id = urldecode($rec_id);
		$tablename = $this->tablename;
		$fields = array("detail_matrik_honor.id", 
			"detail_matrik_honor.id_matrik_honor", 
			"detail_matrik_honor.id_petugas", 
			"detail_matrik_honor.jabatan", 
			"detail_matrik_honor.volume_spk", 
			"detail_matrik_honor.volume_bast", 
			"detail_matrik_honor.satuan", 
			"detail_matrik_honor.harga_satuan", 
			"detail_matrik_honor.total", 
			"detail_matrik_honor.cek_double", 
			"detail_matrik_honor.status_spk", 
			"detail_matrik_honor.id_spk", 
			"detail_matrik_honor.status_bast", 
			"detail_matrik_honor.id_bast", 
			"detail_matrik_honor.rincian_output_detail", 
			"detail_matrik_honor.kak", 
			"detail_matrik_honor.sk", 
			"detail_matrik_honor.spk_ttd", 
			"detail_matrik_honor.bast_ttd", 
			"detail_matrik_honor.selesai_fp", 
			"detail_matrik_honor.pengajuan_spm", 
			"detail_matrik_honor.terbit_sp2d", 
			"detail_matrik_honor.tgl_sp2d", 
			"master_bulan.id AS master_bulan_id", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"master_bulan.kode_bulan AS master_bulan_kode_bulan", 
			"master_petugas.id AS master_petugas_id", 
			"master_petugas.nik AS master_petugas_nik", 
			"master_petugas.nama_petugas AS master_petugas_nama_petugas", 
			"master_petugas.alamat AS master_petugas_alamat", 
			"master_petugas.kecamatan AS master_petugas_kecamatan", 
			"master_petugas.pekerjaan AS master_petugas_pekerjaan", 
			"master_petugas.email AS master_petugas_email", 
			"master_petugas.sobat_id AS master_petugas_sobat_id", 
			"master_petugas.jabatan AS master_petugas_jabatan", 
			"master_petugas.status_petugas AS master_petugas_status_petugas", 
			"master_jabatan_petugas.id AS master_jabatan_petugas_id", 
			"master_jabatan_petugas.jabatan AS master_jabatan_petugas_jabatan", 
			"master_jabatan_petugas.keterangan_jabatan AS master_jabatan_petugas_keterangan_jabatan", 
			"master_satuan.id AS master_satuan_id", 
			"master_satuan.satuan AS master_satuan_satuan", 
			"matrik_honor.id AS matrik_honor_id", 
			"matrik_honor.id_tim AS matrik_honor_id_tim", 
			"matrik_honor.id_rincian_output AS matrik_honor_id_rincian_output", 
			"matrik_honor.id_nama_survei AS matrik_honor_id_nama_survei", 
			"matrik_honor.uraian_kegiatan AS matrik_honor_uraian_kegiatan", 
			"matrik_honor.id_bulan_pelaksanaan AS matrik_honor_id_bulan_pelaksanaan", 
			"matrik_honor.tahun AS matrik_honor_tahun", 
			"matrik_honor.jangka_waktu AS matrik_honor_jangka_waktu", 
			"matrik_honor.cek_double AS matrik_honor_cek_double", 
			"matrik_honor.no_surat_spk AS matrik_honor_no_surat_spk", 
			"matrik_honor.no_surat_bast AS matrik_honor_no_surat_bast", 
			"matrik_honor.create_by AS matrik_honor_create_by", 
			"matrik_honor.create_at AS matrik_honor_create_at", 
			"matrik_honor.harga_satuan_honor AS matrik_honor_harga_satuan_honor", 
			"master_bulan.id AS master_bulan_id", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"master_bulan.kode_bulan AS master_bulan_kode_bulan");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("detail_matrik_honor.id", $rec_id);; //select record based on primary key
		}
		$db->join("master_petugas", "detail_matrik_honor.id_petugas = master_petugas.id", "INNER ");
		$db->join("master_jabatan_petugas", "detail_matrik_honor.jabatan = master_jabatan_petugas.id", "INNER ");
		$db->join("master_satuan", "detail_matrik_honor.satuan = master_satuan.id", "INNER ");
		$db->join("matrik_honor", "detail_matrik_honor.id_matrik_honor = matrik_honor.id", "INNER ");
		$db->join("master_bulan", "matrik_honor.id_bulan_pelaksanaan = master_bulan.id", "INNER ");  
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Detail Matrik Honor";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		}
		else{
			if($db->getLastError()){
				$this->set_page_error();
			}
			else{
				$this->set_page_error("Tidak ada data yang ditemukan");
			}
		}
		return $this->render_view("detail_matrik_honor/view.php", $record);
	}
	/**
     * Insert new record to the database table
	 * @param $formdata array() from $_POST
     * @return BaseView
     */
	function add($formdata = null){
		if($formdata){
			$db = $this->GetModel();
			$tablename = $this->tablename;
			$request = $this->request;
			//fillable fields
			$fields = $this->fields = array("id_matrik_honor","rincian_output_detail","id_petugas","jabatan","volume_spk","volume_bast","satuan","harga_satuan","total");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'id_matrik_honor' => 'required',
				'rincian_output_detail' => 'required',
				'id_petugas' => 'required',
				'jabatan' => 'required',
				'volume_spk' => 'required|numeric',
				'volume_bast' => 'required|numeric',
				'satuan' => 'required',
				'harga_satuan' => 'required|numeric',
				'total' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'id_matrik_honor' => 'sanitize_string',
				'rincian_output_detail' => 'sanitize_string',
				'id_petugas' => 'sanitize_string',
				'jabatan' => 'sanitize_string',
				'volume_spk' => 'sanitize_string',
				'volume_bast' => 'sanitize_string',
				'satuan' => 'sanitize_string',
				'harga_satuan' => 'sanitize_string',
				'total' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
		# Statement to execute before adding record
		// ================= INIT =================
$id_matrik_honor = $_POST['id_matrik_honor'] ?? '';
$db       = $this->GetModel();
$kegiatan = '';
if ($id_matrik_honor) {
    $this->db->where('id', $id_matrik_honor);
    $row = $this->db->getOne('matrik_honor', 'uraian_kegiatan');
    $kegiatan = $row['uraian_kegiatan'] ?? '';
}
// ================= CEK DUPLIKAT =================
$cek_double = $modeldata['id_matrik_honor'] . $modeldata['id_petugas'];
$exist = $db->rawQueryOne(
    "SELECT id FROM detail_matrik_honor WHERE cek_double = ?",
    [$cek_double]
);
if($exist){
    $id_matrik_honor = $_POST['id_matrik_honor'] ?? '';
    if ($id_matrik_honor) {
        $this->db->where('id', $id_matrik_honor);
        $row = $this->db->getOne('matrik_honor', 'uraian_kegiatan');
        $kegiatan = $row['uraian_kegiatan'] ?? '';
    }
    $this->set_flash_msg("Data Petugas sudah ada!", "danger");
    $this->redirect(
        "detail_matrik_honor/add?"
        . "id_matrik_honor=" . urlencode($id_matrik_honor)
        . "&harga_satuan=" . urlencode($_POST['harga_satuan'])
        . "&rincian_output_detail=" . urlencode($_POST['rincian_output_detail'])
        . "&kegiatan=" . urlencode($kegiatan)
    );
    exit;
}
// ================= VALIDASI SBML dan SPK SUDAH CETAK=================
$id_petugas      = $modeldata['id_petugas'];
$id_jabatan      = $modeldata['jabatan'];
$id_matrik_honor = $modeldata['id_matrik_honor'];
$total_baru      = (int)$modeldata['total'];
// 1️⃣ Ambil bulan & tahun
$matrik = $db->rawQueryOne(
    "SELECT id_bulan_pelaksanaan, tahun
     FROM matrik_honor
     WHERE id = ?",
    [$id_matrik_honor]
);
if(!$matrik){
    $this->set_flash_msg("Matrik honor tidak ditemukan", "danger");
    return false;
}
$bulan = $matrik['id_bulan_pelaksanaan'];
$tahun = $matrik['tahun'];
// 6️⃣ Konversi Bulan Indonesia
$nama_bulan = [
    1  => 'Januari',
    2  => 'Februari',
    3  => 'Maret',
    4  => 'April',
    5  => 'Mei',
    6  => 'Juni',
    7  => 'Juli',
    8  => 'Agustus',
    9  => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Desember',
];
// ================= VALIDASI SPK DICETAK =================
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
    $this->set_flash_msg(
        "🚫 SPK untuk petugas ini pada bulan $nama_bulan[$bulan] tahun $tahun sudah dicetak.
        Tidak dapat menambahkan petugas / honor.",
        "danger"
    );
    $this->redirect(
        "detail_matrik_honor/add?"
        . "id_matrik_honor=" . urlencode($id_matrik_honor)
        . "&harga_satuan=" . urlencode($_POST['harga_satuan'])
        . "&rincian_output_detail=" . urlencode($_POST['rincian_output_detail'])
        . "&kegiatan=" . urlencode($kegiatan)
    );
    exit;
}
//$id_jabatan = $petugas['jabatan'];
// 3️⃣ Ambil keterangan jabatan
$jabatan = $db->rawQueryOne(
    "SELECT keterangan_jabatan
     FROM master_jabatan_petugas
     WHERE id = ?",
    [$id_jabatan]
);
if(!$jabatan){
    $this->set_flash_msg("Master jabatan belum disetting", "danger");
    return false;
}
$keterangan_jabatan = $jabatan['keterangan_jabatan'];
// 4️⃣ Ambil batas SBML
$sbml = $db->rawQueryOne(
    "SELECT sbml
     FROM master_sbml
     WHERE jabatan = ?",
    [$keterangan_jabatan]
);
if(!$sbml){
    $this->set_flash_msg(
        "SBML jabatan $keterangan_jabatan belum disetting",
        "danger"
    );
    return false;
}
$batas = (int)$sbml['sbml'];
// 5️⃣ Hitung total existing
$row = $db->rawQueryOne(
    "SELECT IFNULL(SUM(r.total), 0) AS total_existing
     FROM detail_matrik_honor r
     JOIN matrik_honor m ON m.id = r.id_matrik_honor
     WHERE r.id_petugas = ?
       AND m.id_bulan_pelaksanaan = ?
       AND m.tahun = ?",
    [$id_petugas, $bulan, $tahun]
);
$total_existing = (int)$row['total_existing'];
$total_akhir    = $total_existing + $total_baru;
// 6️⃣ Validasi batas
if ($total_akhir > $batas) {
    $this->set_flash_msg(
    "🚫 Total honor bulan $nama_bulan[$bulan] tahun $tahun melebihi SBML jabatan $keterangan_jabatan
    (maksimal Rp " . number_format($batas) . ")",
        "danger"
    );
    $this->redirect(
        "detail_matrik_honor/add?"
        . "id_matrik_honor=" . urlencode($id_matrik_honor)
        . "&harga_satuan=" . urlencode($_POST['harga_satuan'])
        . "&rincian_output_detail=" . urlencode($_POST['rincian_output_detail'])
        . "&kegiatan=" . urlencode($kegiatan)
    );
    exit;
}
ini_set('display_errors', 1);
error_reporting(E_ALL);
// ================= LANJUT INSERT =================
$modeldata['cek_double'] = $cek_double;
		# End of before add statement
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
		# Statement to execute after adding record
		$id_matrik_honor = $_POST['id_matrik_honor'] ?? '';
$kegiatan = '';
if ($id_matrik_honor) {
    $this->db->where('id', $id_matrik_honor);
    $row = $this->db->getOne('matrik_honor', 'uraian_kegiatan');
    $kegiatan = $row['uraian_kegiatan'] ?? '';
}
$this->set_flash_msg("Data berhasil disimpan", "success");
$this->redirect(
    "detail_matrik_honor/add?"
    . "id_matrik_honor=" . urlencode($id_matrik_honor)
    . "&harga_satuan=" . urlencode($_POST['harga_satuan'])
    . "&rincian_output_detail=" . urlencode($_POST['rincian_output_detail'])
    . "&kegiatan=" . urlencode($kegiatan)
);
exit;
		# End of after add statement
					$this->set_flash_msg("Data berhasil disimpan", "success");
					return	$this->redirect("detail_matrik_honor");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Detail Matrik Honor";
		$this->render_view("detail_matrik_honor/add.php");
	}
	/**
     * Update table record with formdata
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function edit($rec_id = null, $formdata = null){
		$request = $this->request;
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		 //editable fields
		$fields = $this->fields = array("id","id_matrik_honor","rincian_output_detail","id_petugas","jabatan","volume_spk","volume_bast","satuan","harga_satuan","total");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'id_matrik_honor' => 'required',
				'rincian_output_detail' => 'required',
				'id_petugas' => 'required',
				'jabatan' => 'required',
				'volume_spk' => 'required|numeric',
				'volume_bast' => 'required|numeric',
				'satuan' => 'required',
				'harga_satuan' => 'required|numeric',
				'total' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'id_matrik_honor' => 'sanitize_string',
				'rincian_output_detail' => 'sanitize_string',
				'id_petugas' => 'sanitize_string',
				'jabatan' => 'sanitize_string',
				'volume_spk' => 'sanitize_string',
				'volume_bast' => 'sanitize_string',
				'satuan' => 'sanitize_string',
				'harga_satuan' => 'sanitize_string',
				'total' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
		# Statement to execute after adding record
		// ================= INIT =================
$id_matrik_honor = $_POST['id_matrik_honor'] ?? '';
$db       = $this->GetModel();
$kegiatan = '';
// ================= VALIDASI SBML =================
$id_petugas      = $modeldata['id_petugas'];
$id_jabatan      = $modeldata['jabatan'];
$id_matrik_honor = $modeldata['id_matrik_honor'];
$total_baru      = (int)$modeldata['total'];
// 1️⃣ Ambil bulan & tahun
$matrik = $db->rawQueryOne(
    "SELECT id_bulan_pelaksanaan, tahun
     FROM matrik_honor
     WHERE id = ?",
    [$id_matrik_honor]
);
if(!$matrik){
    $this->set_flash_msg("Matrik honor tidak ditemukan", "danger");
    return false;
}
$bulan = $matrik['id_bulan_pelaksanaan'];
$tahun = $matrik['tahun'];
//$id_jabatan = $petugas['jabatan'];
// 3️⃣ Ambil keterangan jabatan
$jabatan = $db->rawQueryOne(
    "SELECT keterangan_jabatan
     FROM master_jabatan_petugas
     WHERE id = ?",
    [$id_jabatan]
);
if(!$jabatan){
    $this->set_flash_msg("Master jabatan belum disetting", "danger");
    return false;
}
$keterangan_jabatan = $jabatan['keterangan_jabatan'];
// 4️⃣ Ambil batas SBML
$sbml = $db->rawQueryOne(
    "SELECT sbml
     FROM master_sbml
     WHERE jabatan = ?",
    [$keterangan_jabatan]
);
if(!$sbml){
    $this->set_flash_msg(
        "SBML jabatan $keterangan_jabatan belum disetting",
        "danger"
    );
    return false;
}
$batas = (int)$sbml['sbml'];
// 5️⃣ Hitung total existing
$row = $db->rawQueryOne(
    "SELECT IFNULL(SUM(r.total), 0) AS total_existing
     FROM detail_matrik_honor r
     JOIN matrik_honor m ON m.id = r.id_matrik_honor
     WHERE r.id_petugas = ?
       AND m.id_bulan_pelaksanaan = ?
       AND m.tahun = ?",
    [$id_petugas, $bulan, $tahun]
);
$total_existing = (int)$row['total_existing'];
$total_akhir    = $total_existing + $total_baru;
// 6️⃣ Validasi batas
if ($total_akhir > $batas) {
    $this->set_flash_msg(
        "Total honor bulan $bulan tahun $tahun melebihi SBML jabatan $keterangan_jabatan
         (maks Rp " . number_format($batas) . ")",
        "danger"
    );
            $this->redirect(
            "detail_matrik_honor/list/id_matrik_honor/" . urlencode($id_matrik_honor)
        );
            exit;
}
// ================= LANJUT INSERT =================
$modeldata['cek_double'] = $cek_double;
		# End of before update statement
				$db->where("detail_matrik_honor.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
		# Statement to execute after adding record
			$id_matrik_honor = $_POST['id_matrik_honor'] ?? '';
$this->set_flash_msg("Data berhasil diperbarui", "success");
$this->redirect(
    "detail_matrik_honor/list/id_matrik_honor/" . urlencode($id_matrik_honor)
);
exit;
		# End of after update statement
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("detail_matrik_honor");
				}
				else{
					if($db->getLastError()){
						$this->set_page_error();
					}
					elseif(!$numRows){
						//not an error, but no record was updated
						$page_error = "Tidak ada data yang diupdate";
						$this->set_page_error($page_error);
						$this->set_flash_msg($page_error, "warning");
						return	$this->redirect("detail_matrik_honor");
					}
				}
			}
		}
		$db->where("detail_matrik_honor.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Detail Matrik Honor";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("detail_matrik_honor/edit.php", $data);
	}
	/**
     * Update single field
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function editfield($rec_id = null, $formdata = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		//editable fields
		$fields = $this->fields = array("id","id_matrik_honor","rincian_output_detail","id_petugas","jabatan","volume_spk","volume_bast","satuan","harga_satuan","total");
		$page_error = null;
		if($formdata){
			$postdata = array();
			$fieldname = $formdata['name'];
			$fieldvalue = $formdata['value'];
			$postdata[$fieldname] = $fieldvalue;
			$postdata = $this->format_request_data($postdata);
			$this->rules_array = array(
				'id_matrik_honor' => 'required',
				'rincian_output_detail' => 'required',
				'id_petugas' => 'required',
				'jabatan' => 'required',
				'volume_spk' => 'required|numeric',
				'volume_bast' => 'required|numeric',
				'satuan' => 'required',
				'harga_satuan' => 'required|numeric',
				'total' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'id_matrik_honor' => 'sanitize_string',
				'rincian_output_detail' => 'sanitize_string',
				'id_petugas' => 'sanitize_string',
				'jabatan' => 'sanitize_string',
				'volume_spk' => 'sanitize_string',
				'volume_bast' => 'sanitize_string',
				'satuan' => 'sanitize_string',
				'harga_satuan' => 'sanitize_string',
				'total' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the formdata
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("detail_matrik_honor.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount();
				if($bool && $numRows){
					return render_json(
						array(
							'num_rows' =>$numRows,
							'rec_id' =>$rec_id,
						)
					);
				}
				else{
					if($db->getLastError()){
						$page_error = $db->getLastError();
					}
					elseif(!$numRows){
						$page_error = "Tidak ada data yang diupdate";
					}
					render_error($page_error);
				}
			}
			else{
				render_error($this->view->page_error);
			}
		}
		return null;
	}
	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
     * @return BaseView
     */
	function delete($rec_id = null){
		Csrf::cross_check();
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$this->rec_id = $rec_id;
		//form multiple delete, split record id separated by comma into array
		$arr_rec_id = array_map('trim', explode(",", $rec_id));
		$db->where("detail_matrik_honor.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Data berhasil dihapus", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("detail_matrik_honor");
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function list_tu($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("detail_matrik_honor.id", 
			"master_petugas.nama_petugas AS master_petugas_nama_petugas", 
			"master_petugas.alamat AS master_petugas_alamat", 
			"master_petugas.kecamatan AS master_petugas_kecamatan", 
			"detail_matrik_honor.volume_spk", 
			"detail_matrik_honor.volume_bast", 
			"detail_matrik_honor.harga_satuan", 
			"master_satuan.satuan AS master_satuan_satuan", 
			"detail_matrik_honor.total", 
			"volume_bast*harga_satuan AS total_bast", 
			"detail_matrik_honor.kak", 
			"detail_matrik_honor.sk", 
			"detail_matrik_honor.spk_ttd", 
			"detail_matrik_honor.bast_ttd", 
			"detail_matrik_honor.selesai_fp", 
			"detail_matrik_honor.pengajuan_spm", 
			"detail_matrik_honor.terbit_sp2d", 
			"detail_matrik_honor.tgl_sp2d", 
			"matrik_honor.uraian_kegiatan AS matrik_honor_uraian_kegiatan", 
			"matrik_honor.tahun AS matrik_honor_tahun", 
			"master_bulan.bulan AS master_bulan_bulan");
		$pagination = $this->get_pagination(1000); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				detail_matrik_honor.id LIKE ? OR 
				detail_matrik_honor.id_matrik_honor LIKE ? OR 
				detail_matrik_honor.id_petugas LIKE ? OR 
				detail_matrik_honor.jabatan LIKE ? OR 
				master_petugas.nama_petugas LIKE ? OR 
				master_petugas.alamat LIKE ? OR 
				master_petugas.kecamatan LIKE ? OR 
				detail_matrik_honor.volume_spk LIKE ? OR 
				detail_matrik_honor.volume_bast LIKE ? OR 
				detail_matrik_honor.harga_satuan LIKE ? OR 
				detail_matrik_honor.satuan LIKE ? OR 
				master_satuan.satuan LIKE ? OR 
				detail_matrik_honor.total LIKE ? OR 
				detail_matrik_honor.cek_double LIKE ? OR 
				detail_matrik_honor.status_spk LIKE ? OR 
				detail_matrik_honor.id_spk LIKE ? OR 
				detail_matrik_honor.status_bast LIKE ? OR 
				detail_matrik_honor.id_bast LIKE ? OR 
				detail_matrik_honor.rincian_output_detail LIKE ? OR 
				detail_matrik_honor.total_bast LIKE ? OR 
				detail_matrik_honor.kak LIKE ? OR 
				detail_matrik_honor.sk LIKE ? OR 
				detail_matrik_honor.spk_ttd LIKE ? OR 
				detail_matrik_honor.bast_ttd LIKE ? OR 
				detail_matrik_honor.selesai_fp LIKE ? OR 
				detail_matrik_honor.pengajuan_spm LIKE ? OR 
				detail_matrik_honor.terbit_sp2d LIKE ? OR 
				detail_matrik_honor.tgl_sp2d LIKE ? OR 
				master_petugas.id LIKE ? OR 
				master_petugas.nik LIKE ? OR 
				master_petugas.pekerjaan LIKE ? OR 
				master_petugas.email LIKE ? OR 
				master_petugas.sobat_id LIKE ? OR 
				master_petugas.jabatan LIKE ? OR 
				master_petugas.status_petugas LIKE ? OR 
				master_jabatan_petugas.id LIKE ? OR 
				master_jabatan_petugas.jabatan LIKE ? OR 
				master_jabatan_petugas.keterangan_jabatan LIKE ? OR 
				master_satuan.id LIKE ? OR 
				matrik_honor.id LIKE ? OR 
				matrik_honor.id_tim LIKE ? OR 
				matrik_honor.id_rincian_output LIKE ? OR 
				matrik_honor.id_nama_survei LIKE ? OR 
				matrik_honor.uraian_kegiatan LIKE ? OR 
				matrik_honor.id_bulan_pelaksanaan LIKE ? OR 
				matrik_honor.tahun LIKE ? OR 
				matrik_honor.jangka_waktu LIKE ? OR 
				matrik_honor.cek_double LIKE ? OR 
				matrik_honor.no_surat_spk LIKE ? OR 
				matrik_honor.no_surat_bast LIKE ? OR 
				matrik_honor.create_by LIKE ? OR 
				matrik_honor.create_at LIKE ? OR 
				matrik_honor.harga_satuan_honor LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				master_bulan.kode_bulan LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "detail_matrik_honor/search.php";
		}
		$db->join("master_petugas", "detail_matrik_honor.id_petugas = master_petugas.id", "INNER");
		$db->join("master_jabatan_petugas", "detail_matrik_honor.jabatan = master_jabatan_petugas.id", "INNER");
		$db->join("master_satuan", "detail_matrik_honor.satuan = master_satuan.id", "INNER");
		$db->join("matrik_honor", "detail_matrik_honor.id_matrik_honor = matrik_honor.id", "INNER");
		$db->join("master_bulan", "matrik_honor.id_bulan_pelaksanaan = master_bulan.id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("master_petugas_kecamatan", "ASC");
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $pagination, $fields);
		$records_count = count($records);
		$total_records = intval($tc->totalCount);
		$page_limit = $pagination[1];
		$total_pages = ceil($total_records / $page_limit);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = $records_count;
		$data->total_records = $total_records;
		$data->total_page = $total_pages;
		if($db->getLastError()){
			$this->set_page_error();
		}
		$page_title = $this->view->page_title = "Detail Matrik Honor";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("detail_matrik_honor/list_tu.php", $data); //render the full page
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function list_sp2d_clear($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("detail_matrik_honor.id", 
			"master_petugas.nama_petugas AS master_petugas_nama_petugas", 
			"master_petugas.alamat AS master_petugas_alamat", 
			"master_petugas.kecamatan AS master_petugas_kecamatan", 
			"detail_matrik_honor.volume_spk", 
			"detail_matrik_honor.volume_bast", 
			"detail_matrik_honor.harga_satuan", 
			"master_satuan.satuan AS master_satuan_satuan", 
			"detail_matrik_honor.total", 
			"volume_bast*harga_satuan AS total_bast", 
			"detail_matrik_honor.kak", 
			"detail_matrik_honor.sk", 
			"detail_matrik_honor.spk_ttd", 
			"detail_matrik_honor.bast_ttd", 
			"detail_matrik_honor.selesai_fp", 
			"detail_matrik_honor.pengajuan_spm", 
			"detail_matrik_honor.terbit_sp2d", 
			"detail_matrik_honor.tgl_sp2d", 
			"matrik_honor.uraian_kegiatan AS matrik_honor_uraian_kegiatan", 
			"matrik_honor.tahun AS matrik_honor_tahun", 
			"master_bulan.bulan AS master_bulan_bulan");
		$pagination = $this->get_pagination(1000); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				detail_matrik_honor.id LIKE ? OR 
				detail_matrik_honor.id_matrik_honor LIKE ? OR 
				detail_matrik_honor.id_petugas LIKE ? OR 
				detail_matrik_honor.jabatan LIKE ? OR 
				master_petugas.nama_petugas LIKE ? OR 
				master_petugas.alamat LIKE ? OR 
				master_petugas.kecamatan LIKE ? OR 
				detail_matrik_honor.volume_spk LIKE ? OR 
				detail_matrik_honor.volume_bast LIKE ? OR 
				detail_matrik_honor.harga_satuan LIKE ? OR 
				matrik_honor.harga_satuan_honor LIKE ? OR 
				master_satuan.satuan LIKE ? OR 
				detail_matrik_honor.satuan LIKE ? OR 
				detail_matrik_honor.total LIKE ? OR 
				detail_matrik_honor.cek_double LIKE ? OR 
				detail_matrik_honor.status_spk LIKE ? OR 
				detail_matrik_honor.id_spk LIKE ? OR 
				detail_matrik_honor.status_bast LIKE ? OR 
				detail_matrik_honor.id_bast LIKE ? OR 
				detail_matrik_honor.rincian_output_detail LIKE ? OR 
				detail_matrik_honor.total_bast LIKE ? OR 
				detail_matrik_honor.kak LIKE ? OR 
				detail_matrik_honor.sk LIKE ? OR 
				detail_matrik_honor.spk_ttd LIKE ? OR 
				detail_matrik_honor.bast_ttd LIKE ? OR 
				detail_matrik_honor.selesai_fp LIKE ? OR 
				detail_matrik_honor.pengajuan_spm LIKE ? OR 
				detail_matrik_honor.terbit_sp2d LIKE ? OR 
				detail_matrik_honor.tgl_sp2d LIKE ? OR 
				master_petugas.id LIKE ? OR 
				master_petugas.nik LIKE ? OR 
				master_petugas.pekerjaan LIKE ? OR 
				master_petugas.email LIKE ? OR 
				master_petugas.sobat_id LIKE ? OR 
				master_petugas.jabatan LIKE ? OR 
				master_petugas.status_petugas LIKE ? OR 
				master_jabatan_petugas.id LIKE ? OR 
				master_jabatan_petugas.jabatan LIKE ? OR 
				master_jabatan_petugas.keterangan_jabatan LIKE ? OR 
				master_satuan.id LIKE ? OR 
				matrik_honor.id LIKE ? OR 
				matrik_honor.id_tim LIKE ? OR 
				matrik_honor.id_rincian_output LIKE ? OR 
				matrik_honor.id_nama_survei LIKE ? OR 
				matrik_honor.uraian_kegiatan LIKE ? OR 
				matrik_honor.id_bulan_pelaksanaan LIKE ? OR 
				matrik_honor.tahun LIKE ? OR 
				matrik_honor.jangka_waktu LIKE ? OR 
				matrik_honor.cek_double LIKE ? OR 
				matrik_honor.no_surat_spk LIKE ? OR 
				matrik_honor.no_surat_bast LIKE ? OR 
				matrik_honor.create_by LIKE ? OR 
				matrik_honor.create_at LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				master_bulan.kode_bulan LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "detail_matrik_honor/search.php";
		}
		$db->join("master_petugas", "detail_matrik_honor.id_petugas = master_petugas.id", "INNER");
		$db->join("master_jabatan_petugas", "detail_matrik_honor.jabatan = master_jabatan_petugas.id", "INNER");
		$db->join("master_satuan", "detail_matrik_honor.satuan = master_satuan.id", "INNER");
		$db->join("matrik_honor", "detail_matrik_honor.id_matrik_honor = matrik_honor.id", "INNER");
		$db->join("master_bulan", "matrik_honor.id_bulan_pelaksanaan = master_bulan.id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("master_petugas_kecamatan", "ASC");
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $pagination, $fields);
		$records_count = count($records);
		$total_records = intval($tc->totalCount);
		$page_limit = $pagination[1];
		$total_pages = ceil($total_records / $page_limit);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = $records_count;
		$data->total_records = $total_records;
		$data->total_page = $total_pages;
		if($db->getLastError()){
			$this->set_page_error();
		}
		$page_title = $this->view->page_title = "Detail Matrik Honor";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("detail_matrik_honor/list_sp2d_clear.php", $data); //render the full page
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	//Funsi toggle status List TU MATRIK HONOR
	function toggle_field(){
    header('Content-Type: application/json');
    
     
    $id = $_POST['id'] ?? null;
    $field = $_POST['field'] ?? null;

    $allowed_fields = ['kak','sk','spk_ttd','bast_ttd','selesai_fp','pengajuan_spm','terbit_sp2d'];
    if(!$id || !$field || !in_array($field, $allowed_fields)){
        echo json_encode(['status'=>'error','msg'=>'ID atau field tidak valid']);
        exit;
    }

    $db = $this->GetModel();

    // Ambil nilai terbaru langsung
    $row = $db->where("id", $id)->getOne($this->tablename, [$field]);

    if(!$row){
        echo json_encode(['status'=>'error','msg'=>'Data tidak ditemukan']);
        exit;
    }

    $current = (int)$row[$field];
    $new = $current === 1 ? 0 : 1;

    $update = [
        $field => $new
    ];

            // KHUSUS terbit_sp2d
        if($field === 'terbit_sp2d'){
            if($new === 1){
                $update['tgl_sp2d'] = date('d M Y');
            } else {
                $update['tgl_sp2d'] = ''; // ← BLANK
            }
        }


    $db->where("id", $id)->update($this->tablename, $update);

    $icons = [
        1 => 'bi-check-circle-fill text-success',
        0 => 'bi-x-circle-fill text-danger'
    ];

    echo json_encode([
        'status' => 'ok',
        'value'  => $new,
        'html'   => '<i class="bi '.$icons[$new].'"></i>',
        'tgl_sp2d' => $update['tgl_sp2d'] ?? null
    ]);
    exit;
}
}
