<?php 
/**
 * Bast Page Controller
 * @category  Controller
 */
class BastController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "bast";
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
		$fields = array("bast.id", 
			"bast.nomor_bast", 
			"bast.tgl_bast", 
			"bast.status_ttd_mitra", // Tambahan
			"bast.status_ttd_pegawai", // Tambahan
			"bast.file_pdf_bast",
			"bast.bulan_bast", 
			"master_ppk.nama_ppk AS master_ppk_nama_ppk", 
			"master_petugas.nama_petugas AS master_petugas_nama_petugas", 
			"master_petugas.alamat AS master_petugas_alamat", 
			"master_petugas.kecamatan AS master_petugas_kecamatan");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				bast.id LIKE ? OR 
				bast.nomor_bast LIKE ? OR 
				bast.tgl_bast LIKE ? OR 
				bast.create_by LIKE ? OR 
				bast.create_at LIKE ? OR 
				bast.id_petugas_bast LIKE ? OR 
				bast.bulan_bast LIKE ? OR 
				bast.id_ppk_bast LIKE ? OR 
				bast.rincian_output_bast LIKE ? OR 
				master_ppk.id LIKE ? OR 
				master_ppk.nama_ppk LIKE ? OR 
				master_ppk.nip_ppk LIKE ? OR 
				master_ppk.status_ppk LIKE ? OR 
				master_petugas.id LIKE ? OR 
				master_petugas.nik LIKE ? OR 
				master_petugas.nama_petugas LIKE ? OR 
				master_petugas.alamat LIKE ? OR 
				master_petugas.kecamatan LIKE ? OR 
				master_petugas.pekerjaan LIKE ? OR 
				master_petugas.email LIKE ? OR 
				master_petugas.sobat_id LIKE ? OR 
				master_petugas.jabatan LIKE ? OR 
				master_petugas.status_petugas LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "bast/search.php";
		}
		$db->join("master_ppk", "bast.id_ppk_bast = master_ppk.id", "LEFT");
		$db->join("master_petugas", "bast.id_petugas_bast = master_petugas.id", "INNER");
		   // Filter BAST untuk mitra: berdasarkan id_petugas_bast jika ada, fallback ke NIK
		   if (strtolower(USER_ROLE) === 'mitra') {
			   // Cari id master_petugas berdasarkan NIK user login
			   $db2 = $this->GetModel();
			   $petugas = $db2->where('email', USER_EMAIL)->getOne('master_petugas', 'id');
			   if ($petugas && isset($petugas['id'])) {
				   $db->where('bast.id_petugas_bast', $petugas['id']);
			   } else {
				   $db->where('master_petugas.nik', USER_EMAIL);
			   }
		   }
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("bast.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Bast";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("bast/list.php", $data); //render the full page
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
		$fields = array("bast.id", 
			"bast.nomor_bast", 
			"bast.tgl_bast", 
			"bast.create_by", 
			"bast.create_at", 
			"bast.id_petugas_bast", 
			"bast.bulan_bast", 
			"bast.id_ppk_bast", 
			"bast.rincian_output_bast", 
			"master_ppk.id AS master_ppk_id", 
			"master_ppk.nama_ppk AS master_ppk_nama_ppk", 
			"master_ppk.nip_ppk AS master_ppk_nip_ppk", 
			"master_ppk.status_ppk AS master_ppk_status_ppk", 
			"master_petugas.id AS master_petugas_id", 
			"master_petugas.nik AS master_petugas_nik", 
			"master_petugas.nama_petugas AS master_petugas_nama_petugas", 
			"master_petugas.alamat AS master_petugas_alamat", 
			"master_petugas.kecamatan AS master_petugas_kecamatan", 
			"master_petugas.pekerjaan AS master_petugas_pekerjaan", 
			"master_petugas.email AS master_petugas_email", 
			"master_petugas.sobat_id AS master_petugas_sobat_id", 
			"master_petugas.jabatan AS master_petugas_jabatan", 
			"master_petugas.status_petugas AS master_petugas_status_petugas");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("bast.id", $rec_id);; //select record based on primary key
		}
		$db->join("master_ppk", "bast.id_ppk_bast = master_ppk.id", "LEFT ");
		$db->join("master_petugas", "bast.id_petugas_bast = master_petugas.id", "INNER ");  
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Bast";
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
		return $this->render_view("bast/view.php", $record);
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
			$fields = $this->fields = array("nomor_bast","bulan_bast","id_petugas_bast","rincian_output_bast","tgl_bast","create_by","create_at","id_ppk_bast");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'nomor_bast' => 'required',
				'bulan_bast' => 'required',
				'id_petugas_bast' => 'required',
				'rincian_output_bast' => 'required',
				'tgl_bast' => 'required',
				'id_ppk_bast' => 'required',
			);
			$this->sanitize_array = array(
				'nomor_bast' => 'sanitize_string',
				'bulan_bast' => 'sanitize_string',
				'id_petugas_bast' => 'sanitize_string',
				'rincian_output_bast' => 'sanitize_string',
				'tgl_bast' => 'sanitize_string',
				'id_ppk_bast' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['create_by'] = USER_NAME;
$modeldata['create_at'] = datetime_now();
			//Check if Duplicate Record Already Exit In The Database
			$db->where("nomor_bast", $modeldata['nomor_bast']);
			if($db->has($tablename)){
				$this->view->page_error[] = $modeldata['nomor_bast']." Data sudah ada!";
			} 
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
		# Statement to execute after adding record
		$db = $this->GetModel();
// ===== 1. Ambil data BAST berdasarkan rec_id =====
$bast = $db->rawQueryOne("
    SELECT 
        id,
        id_petugas_bast,
        bulan_bast,
        rincian_output_bast
    FROM bast
    WHERE id = ?
", array($rec_id));
if (!$bast) {
    return;
}
$id_bast              = $bast['id'];  
$id_petugas_bast      = $bast['id_petugas_bast'];
$bulan_tahun_bast     = $bast['bulan_bast'];   // contoh: "JANUARI 2025"
$rincian_output_bast  = $bast['rincian_output_bast'];
// ===== 2. Ambil baris spk_view berdasarkan kondisi =====
// • id_petugas = id_petugas_bast
// • bulan_tahun sama dengan BAST
// • id_rincian_output = rincian_output_bast
$spk_view_list = $db->rawQuery("
    SELECT 
        id,                   
        id_petugas,
        id_rincian_output
    FROM spk_view
    WHERE id_petugas = ?
      AND bulan_tahun = ?
      AND id_rincian_output = ?
", array(
    $id_petugas_bast,
    $bulan_tahun_bast,
    $rincian_output_bast
));
if (!$spk_view_list) {
    return;
}
// ===== 3. Update detail_matrik_honor berdasarkan kecocokan =====
// • detail_matrik_honor.id = spk_view.id
// • detail_matrik_honor.id_petugas = spk_view.id_petugas
// • detail_matrik_honor.rincian_output_detail = spk_view.id_rincian_output
foreach ($spk_view_list as $row) {
    $db->rawQuery("
        UPDATE detail_matrik_honor
        SET 
            status_bast = 1,
            id_bast = ?
        WHERE id = ?
          AND id_petugas = ?
          AND rincian_output_detail = ?
    ", array(
        $id_bast,
        $row['id'],
        $row['id_petugas'],
        $row['id_rincian_output']
    ));
}
		# End of after add statement
					$this->set_flash_msg("Data berhasil disimpan", "success");
					return	$this->redirect("bast");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Buat BAST";
		$this->render_view("bast/add.php");
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
		$fields = $this->fields = array("id","nomor_bast","bulan_bast","id_petugas_bast","rincian_output_bast","tgl_bast","create_by","create_at","id_ppk_bast");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'nomor_bast' => 'required',
				'bulan_bast' => 'required',
				'id_petugas_bast' => 'required',
				'rincian_output_bast' => 'required',
				'tgl_bast' => 'required',
				'id_ppk_bast' => 'required',
			);
			$this->sanitize_array = array(
				'nomor_bast' => 'sanitize_string',
				'bulan_bast' => 'sanitize_string',
				'id_petugas_bast' => 'sanitize_string',
				'rincian_output_bast' => 'sanitize_string',
				'tgl_bast' => 'sanitize_string',
				'id_ppk_bast' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['create_by'] = USER_NAME;
$modeldata['create_at'] = datetime_now();
			//Check if Duplicate Record Already Exit In The Database
			if(isset($modeldata['nomor_bast'])){
				$db->where("nomor_bast", $modeldata['nomor_bast'])->where("id", $rec_id, "!=");
				if($db->has($tablename)){
					$this->view->page_error[] = $modeldata['nomor_bast']." Data sudah ada!";
				}
			} 
			if($this->validated()){
				$db->where("bast.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("bast");
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
						return	$this->redirect("bast");
					}
				}
			}
		}
		$db->where("bast.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Bast";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("bast/edit.php", $data);
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
	#Statement to execute before delete record
	$db = $this->GetModel();
// ===== 1. Ambil data BAST yang akan dihapus
$bast = $db->rawQueryOne("
    SELECT 
        id,
        id_petugas_bast,
        bulan_bast,
        rincian_output_bast
    FROM bast
    WHERE id = ?
", array($rec_id));
if (!$bast) {
    return;
}
$id_bast              = $bast['id'];  
$id_petugas_bast      = $bast['id_petugas_bast'];
$bulan_tahun_bast     = $bast['bulan_bast'];   // contoh: "JANUARI 2025"
$rincian_output_bast  = $bast['rincian_output_bast'];
// ===== 2. Ambil baris spk_view berdasarkan kondisi =====
// • id_petugas = id_petugas_bast
// • bulan_tahun sama dengan BAST
// • id_rincian_output = rincian_output_bast
$spk_view_list = $db->rawQuery("
    SELECT 
        id,                   
        id_petugas,
        id_rincian_output
    FROM spk_view
    WHERE id_petugas = ?
      AND bulan_tahun = ?
      AND id_rincian_output = ?
", array(
    $id_petugas_bast,
    $bulan_tahun_bast,
    $rincian_output_bast
));
if (!$spk_view_list) {
    return;
}
// ===== 3. Update detail_matrik_honor berdasarkan kecocokan =====
// • detail_matrik_honor.id = spk_view.id
// • detail_matrik_honor.id_petugas = spk_view.id_petugas
// • detail_matrik_honor.rincian_output_detail = spk_view.id_rincian_output
foreach ($spk_view_list as $row) {
    $db->rawQuery("
        UPDATE detail_matrik_honor
        SET 
        status_bast = 0,
        id_bast = 0
        WHERE id = ?
          AND id_petugas = ?
          AND rincian_output_detail = ?
    ", array(
        $row['id'],
        $row['id_petugas'],
        $row['id_rincian_output']
    ));
}
	# End of before delete statement
		$db->where("bast.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Data berhasil dihapus", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("bast");
	}
	function approve_mitra($rec_id = null) {
        Csrf::cross_check();
        $db = $this->GetModel();
        if (strtolower(USER_ROLE) !== 'mitra') {
            $this->set_flash_msg("Akses ditolak!", "danger");
            return $this->redirect("bast");
        }
        $db->where('id', $rec_id)->update($this->tablename, ["status_ttd_mitra" => "disetujui"]);
        $this->set_flash_msg("BAST Berhasil Disetujui", "success");
        return $this->redirect("bast");
    }
	// Upload PDF BAST (scan dokumen BAST)
	function upload_pdf($rec_id = null) {
		Csrf::cross_check();
		$db = $this->GetModel();
		if (!isset($_FILES['pdf_file'])) {
			$this->set_flash_msg('File tidak ditemukan', 'danger');
			return $this->redirect("bast");
		}
		$file = $_FILES['pdf_file'];
		$upload_dir = 'uploads/files/';
		if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
		$filename = 'bast_scan_' . $rec_id . '_' . time() . '.pdf';
		$target_path = $upload_dir . $filename;
		if (move_uploaded_file($file['tmp_name'], $target_path)) {
			$db->where('id', $rec_id);
			// Simpan ke kolom file_pdf_bast agar konsisten dengan database
			$db->update($this->tablename, ['file_pdf_bast' => $target_path]);
			$this->set_flash_msg('Scan BAST Berhasil Diupload', 'success');
		}
		return $this->redirect("bast");
	}
	// Approve/reject PDF BAST oleh TU/Admin
	function approve_pdf($rec_id = null) {
		Csrf::cross_check();
		if (!in_array(strtolower(USER_ROLE), ['tu', 'administrator', 'admin'])) {
			$this->set_flash_msg("Hanya Admin/TU yang bisa mengesahkan!", "danger");
			return $this->redirect("bast");
		}
		$aksi = $_POST['aksi'] ?? '';
		$status = ($aksi == 'setujui') ? 'disetujui' : 'ditolak';
		$db = $this->GetModel();
		$db->where('id', $rec_id)->update($this->tablename, ["status_ttd_pegawai" => $status]);
		$this->set_flash_msg("BAST Berhasil di-$status", "success");
		return $this->redirect("bast");
	}
	
}
