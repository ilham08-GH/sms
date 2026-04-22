<?php 
/**
 * Spk Page Controller
 * @category  Controller
 */
class SpkController extends SecureController{
	   function __construct(){
		   parent::__construct();
		   $this->tablename = "spk";
		   $this->allowed_pages = array("index", "view", "view2", "approve_mitra","upload_pdf", "approve_pdf");
	   }

	   /**
		* Approve or reject PDF by TU/Admin
		* @param $rec_id (SPK id)
		*/
	   function approve_pdf($rec_id = null) {
		   Csrf::cross_check();
		   $db = $this->GetModel();
		   $tablename = $this->tablename;
		   $request = $this->request;
		   $user_role = strtolower(USER_ROLE);
		   if (!in_array($user_role, ['tu', 'administrator', 'admin'])) {
			   $this->set_flash_msg("Akses ditolak!", "danger");
			   return $this->redirect("spk");
		   }
		$aksi = isset($_POST['aksi']) ? $_POST['aksi'] : '';
		   $status = null;
		   if ($aksi == 'setujui') {
			   $status = 'disetujui';
		   } elseif ($aksi == 'tolak') {
			   $status = 'ditolak';
		   } else {
			   $this->set_flash_msg("Aksi tidak valid!", "danger");
			   return $this->redirect("spk");
		   }
		   $db->where('id', $rec_id);
		   $update = $db->update($tablename, ["status_pegawai" => $status]);
		   if ($update) {
			   $this->set_flash_msg("Status PDF berhasil diubah menjadi <b>$status</b>.", "success");
		   } else {
			   $this->set_flash_msg("Gagal mengubah status PDF!", "danger");
		   }
		   return $this->redirect("spk");
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
		
		// 1. Tentukan field dengan Alias yang sangat jelas
		$fields = array(
			"spk.id AS id", 
			"spk.nomor_spk", 
			"spk.tgl_spk", 
			"spk.tgl_selesai_spk", 
			"spk.bulan_spk", 
			"spk.status_mitra", 
			"spk.status_pegawai",
			"spk.file_pdf_mitra",
			"master_ppk.nama_ppk AS master_ppk_nama_ppk", 
			"master_petugas.nama_petugas AS master_petugas_nama_petugas", 
			"master_petugas.alamat AS master_petugas_alamat", 
			"master_petugas.kecamatan AS master_petugas_kecamatan", 
			"spk.honor_pelatihan"
		);

		$pagination = $this->get_pagination(MAX_RECORD_COUNT); 
		
		// Search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				spk.id LIKE ? OR spk.nomor_spk LIKE ? OR spk.tgl_spk LIKE ? OR 
				master_ppk.nama_ppk LIKE ? OR master_petugas.nama_petugas LIKE ? OR 
				master_petugas.email LIKE ?
			)";
			$search_params = array("%$text%","%$text%","%$text%","%$text%","%$text%","%$text%");
			$db->where($search_condition, $search_params);
			$this->view->search_template = "spk/search.php";
		}

		// 2. Joins
		$db->join("master_ppk", "spk.id_ppk = master_ppk.id", "LEFT");
		$db->join("master_petugas", "spk.id_petugas_spk = master_petugas.id", "LEFT");

		// 3. Filter Mitra (Menggunakan Email yang lebih konsisten di session)
		if (strtolower(USER_ROLE) === 'mitra') {
			$db->where('master_petugas.email', USER_EMAIL);
		}

		// Order By
		if(!empty($request->orderby)){
			$db->orderBy($request->orderby, (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE));
		} else {
			$db->orderBy("spk.id", ORDER_TYPE);
		}

		if($fieldname){
			$db->where($fieldname , $fieldvalue);
		}

		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $pagination, $fields);
		
		// 4. Pengolahan Tanggal (Aman untuk PHP 7.3)
		if(!empty($records)){
			foreach($records as &$record){
				// Hanya format jika tanggal tidak kosong untuk menghindari error 500
				if(!empty($record['tgl_spk']) && $record['tgl_spk'] != '0000-00-00'){
					$record['tgl_spk'] = format_date($record['tgl_spk'],'d M Y');
				}
				if(!empty($record['tgl_selesai_spk']) && $record['tgl_selesai_spk'] != '0000-00-00'){
					$record['tgl_selesai_spk'] = format_date($record['tgl_selesai_spk'],'d M Y');
				}
			}
		}

		// 5. Build Data Object
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = count($records);
		$data->total_records = intval($tc->totalCount);
		$data->total_page = ceil($data->total_records / $pagination[1]);

		if($db->getLastError()){
			$this->set_page_error();
		}

		$page_title = $this->view->page_title = "SPK";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		
		$this->render_view("spk/list.php", $data); 
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
		$fields = array("spk.id", 
			"spk.nomor_spk", 
			"spk.tgl_spk", 
			"spk.tgl_selesai_spk", 
			"spk.create_by", 
			"spk.create_at", 
			"spk.bulan_spk", 
			"spk.tahun_spk", 
			"spk.id_ppk", 
			"spk.id_petugas_spk", 
			"spk.status_mitra",
			"spk.status_pegawai",
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
			"master_petugas.status_petugas AS master_petugas_status_petugas", 
			"spk.honor_pelatihan");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("spk.id", $rec_id);; //select record based on primary key
		}
		$db->join("master_ppk", "spk.id_ppk = master_ppk.id", "LEFT ");
		$db->join("master_petugas", "spk.id_petugas_spk = master_petugas.id", "INNER ");  
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Spk";
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
		return $this->render_view("spk/view.php", $record);
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
			$fields = $this->fields = array("nomor_spk","bulan_spk","id_petugas_spk","tgl_spk","tgl_selesai_spk","create_by","create_at","id_ppk","honor_pelatihan");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'nomor_spk' => 'required',
				'bulan_spk' => 'required',
				'id_petugas_spk' => 'required',
				'tgl_spk' => 'required',
				'tgl_selesai_spk' => 'required',
				'id_ppk' => 'required',
				'honor_pelatihan' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'nomor_spk' => 'sanitize_string',
				'bulan_spk' => 'sanitize_string',
				'id_petugas_spk' => 'sanitize_string',
				'tgl_spk' => 'sanitize_string',
				'tgl_selesai_spk' => 'sanitize_string',
				'id_ppk' => 'sanitize_string',
				'honor_pelatihan' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['create_by'] = USER_NAME;
$modeldata['create_at'] = datetime_now();
			//Check if Duplicate Record Already Exit In The Database
			$db->where("nomor_spk", $modeldata['nomor_spk']);
			if($db->has($tablename)){
				$this->view->page_error[] = $modeldata['nomor_spk']." Data sudah ada!";
			} 
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
		# Statement to execute after adding record
		$db = $this->GetModel();
// ===== 1. Ambil data SPK yang baru disimpan =====
$spk = $db->rawQueryOne("
    SELECT 
        id, 
        id_petugas_spk,
        bulan_spk,
        tahun_spk
    FROM spk
    WHERE id = ?
", array($rec_id));
if (!$spk) {
    return;
}
$id_spk            = $spk['id'];               // ID SPK (yang harus disimpan ke detail_matrik_honor)
$id_petugas_spk    = $spk['id_petugas_spk'];   // Petugas SPK
$bulan_tahun_spk   = $spk['bulan_spk'] . ' ' . $spk['tahun_spk']; 
// ===== 2. Ambil semua baris spk_view untuk petugas ini dan bulan yang sama =====
$spk_view_list = $db->rawQuery("
    SELECT id, id_petugas
    FROM spk_view
    WHERE id_petugas = ?
      AND bulan_tahun = ?
", array($id_petugas_spk, $bulan_tahun_spk));
if (!$spk_view_list) {
    return;
}
// ===== 3. Update detail_matrik_honor untuk semua baris tersebut =====
foreach ($spk_view_list as $row) {
    $db->rawQuery("
        UPDATE detail_matrik_honor
        SET status_spk = 1,
            id_spk = ?
        WHERE id = ?
          AND id_petugas = ?
    ", array($id_spk, $row['id'], $row['id_petugas']));
}
		# End of after add statement
					$this->set_flash_msg("Data berhasil disimpan", "success");
					return	$this->redirect("spk");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Buat SPK";
		$this->render_view("spk/add.php");
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
		$fields = $this->fields = array("id","nomor_spk","bulan_spk","id_petugas_spk","tgl_spk","tgl_selesai_spk","create_by","create_at","id_ppk","honor_pelatihan");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'nomor_spk' => 'required',
				'bulan_spk' => 'required',
				'id_petugas_spk' => 'required',
				'tgl_spk' => 'required',
				'tgl_selesai_spk' => 'required',
				'id_ppk' => 'required',
				'honor_pelatihan' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'nomor_spk' => 'sanitize_string',
				'bulan_spk' => 'sanitize_string',
				'id_petugas_spk' => 'sanitize_string',
				'tgl_spk' => 'sanitize_string',
				'tgl_selesai_spk' => 'sanitize_string',
				'id_ppk' => 'sanitize_string',
				'honor_pelatihan' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['create_by'] = USER_NAME;
$modeldata['create_at'] = datetime_now();
			//Check if Duplicate Record Already Exit In The Database
			if(isset($modeldata['nomor_spk'])){
				$db->where("nomor_spk", $modeldata['nomor_spk'])->where("id", $rec_id, "!=");
				if($db->has($tablename)){
					$this->view->page_error[] = $modeldata['nomor_spk']." Data sudah ada!";
				}
			} 
			if($this->validated()){
				$db->where("spk.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("spk");
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
						return	$this->redirect("spk");
					}
				}
			}
		}
		$db->where("spk.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Spk";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("spk/edit.php", $data);
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
		$fields = $this->fields = array("id","nomor_spk","bulan_spk","id_petugas_spk","tgl_spk","tgl_selesai_spk","create_by","create_at","id_ppk","honor_pelatihan");
		$page_error = null;
		if($formdata){
			$postdata = array();
			$fieldname = $formdata['name'];
			$fieldvalue = $formdata['value'];
			$postdata[$fieldname] = $fieldvalue;
			$postdata = $this->format_request_data($postdata);
			$this->rules_array = array(
				'nomor_spk' => 'required',
				'bulan_spk' => 'required',
				'id_petugas_spk' => 'required',
				'tgl_spk' => 'required',
				'tgl_selesai_spk' => 'required',
				'id_ppk' => 'required',
				'honor_pelatihan' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'nomor_spk' => 'sanitize_string',
				'bulan_spk' => 'sanitize_string',
				'id_petugas_spk' => 'sanitize_string',
				'tgl_spk' => 'sanitize_string',
				'tgl_selesai_spk' => 'sanitize_string',
				'id_ppk' => 'sanitize_string',
				'honor_pelatihan' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the formdata
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			//Check if Duplicate Record Already Exit In The Database
			if(isset($modeldata['nomor_spk'])){
				$db->where("nomor_spk", $modeldata['nomor_spk'])->where("id", $rec_id, "!=");
				if($db->has($tablename)){
					$this->view->page_error[] = $modeldata['nomor_spk']." Data sudah ada!";
				}
			} 
			if($this->validated()){
				$db->where("spk.id", $rec_id);;
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
	#Statement to execute before delete record
	$db = $this->GetModel();
// Ambil data SPK yang akan dihapus
$spk = $db->rawQueryOne("
    SELECT 
        id,
        id_petugas_spk,
        bulan_spk,
        tahun_spk
    FROM spk
    WHERE id = ?
", array($rec_id));
if (!$spk) return;
$id_spk         = $spk['id'];
$id_petugas     = $spk['id_petugas_spk'];
$bulan_tahun    = $spk['bulan_spk'] . ' ' . $spk['tahun_spk'];
// Ambil data dari spk_view
$spk_view_list = $db->rawQuery("
    SELECT id, id_petugas
    FROM spk_view
    WHERE id_petugas = ?
      AND bulan_tahun = ?
", array($id_petugas, $bulan_tahun));
if (!$spk_view_list) return;
// Reset
foreach ($spk_view_list as $row) {
    $db->rawQuery("
        UPDATE detail_matrik_honor
        SET status_spk = 0,
            id_spk = 0
        WHERE id = ?
          AND id_petugas = ?
    ", array($row['id'], $row['id_petugas']));
}
	# End of before delete statement
		$db->where("spk.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Data berhasil dihapus", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("spk");
	}
	/**
     * View record detail 
	 * @param $rec_id (select record by table primary key) 
     * @param $value value (select record by value of field name(rec_id))
     * @return BaseView
     */
	function view2($rec_id = null, $value = null){
		$request = $this->request;
		$db = $this->GetModel();
		$rec_id = $this->rec_id = urldecode($rec_id);
		$tablename = $this->tablename;
		$fields = array("spk.id", 
			"spk.nomor_spk", 
			"spk.tgl_spk", 
			"spk.tgl_selesai_spk", 
			"spk.create_by", 
			"spk.create_at", 
			"spk.bulan_spk", 
			"spk.tahun_spk", 
			"spk.id_ppk", 
			"spk.id_petugas_spk", 
			"spk.status_mitra",
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
			"master_petugas.status_petugas AS master_petugas_status_petugas", 
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
			"master_petugas.status_petugas AS master_petugas_status_petugas", 
			"detail_matrik_honor.id AS detail_matrik_honor_id", 
			"detail_matrik_honor.id_matrik_honor AS detail_matrik_honor_id_matrik_honor", 
			"detail_matrik_honor.id_petugas AS detail_matrik_honor_id_petugas", 
			"detail_matrik_honor.jabatan AS detail_matrik_honor_jabatan", 
			"detail_matrik_honor.volume_spk AS detail_matrik_honor_volume_spk", 
			"detail_matrik_honor.volume_bast AS detail_matrik_honor_volume_bast", 
			"detail_matrik_honor.satuan AS detail_matrik_honor_satuan", 
			"detail_matrik_honor.harga_satuan AS detail_matrik_honor_harga_satuan", 
			"detail_matrik_honor.total AS detail_matrik_honor_total", 
			"detail_matrik_honor.cek_double AS detail_matrik_honor_cek_double", 
			"detail_matrik_honor.status_spk AS detail_matrik_honor_status_spk", 
			"detail_matrik_honor.id_spk AS detail_matrik_honor_id_spk", 
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
			"master_rincian_output.id AS master_rincian_output_id", 
			"master_rincian_output.rincian_output AS master_rincian_output_rincian_output", 
			"master_rincian_output.status_rincian_output AS master_rincian_output_status_rincian_output", 
			"spk.honor_pelatihan");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("spk.id", $rec_id);; //select record based on primary key
		}
		$db->join("master_ppk", "spk.id_ppk = master_ppk.id", "INNER ");
		$db->join("master_petugas", "spk.id_petugas_spk = master_petugas.id", "INNER ");
		$db->join("detail_matrik_honor", "spk.id = detail_matrik_honor.id_spk", "INNER ");
		$db->join("matrik_honor", "detail_matrik_honor.id_matrik_honor = matrik_honor.id", "INNER ");
		$db->join("master_rincian_output", "matrik_honor.id_rincian_output = master_rincian_output.id", "INNER ");  
		$record = $db->getOne($tablename, $fields );
		if($record){
			$record['tgl_spk'] = format_date($record['tgl_spk'],'d M Y');
$record['tgl_selesai_spk'] = format_date($record['tgl_selesai_spk'],'d M Y');
			$page_title = $this->view->page_title = "View  Spk";
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
		return $this->render_view("spk/view2.php", $record);
	}
	/**
     * Approve mitra action
     * @param $rec_id (primary key)
     */
    function approve_mitra($rec_id = null) {
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$rec_id = urldecode($rec_id);
		$user_role = strtolower(USER_ROLE);
		$user_email = USER_EMAIL;

		if ($user_role !== 'mitra') {
			$this->set_flash_msg("Akses ditolak!", "danger");
			$this->redirect("spk");
		}

		$data = [
			"status_mitra" => "disetujui",
		];

		$db->where("id", $rec_id);
		$db->where("id_petugas_spk = (SELECT id FROM master_petugas WHERE email = ?)", [$user_email]);
		$update = $db->update($tablename, $data);

		if ($update) {
			$this->set_flash_msg("Dokumen berhasil disetujui secara elektronik.", "success");
		} else {
			$this->set_flash_msg("Gagal menyetujui.", "danger");
		}
		$this->redirect("spk");
	}
	function upload_pdf($rec_id = null) {
		Csrf::cross_check();
		
		// Pastikan ID ada
		if (!$rec_id) {
			$this->set_flash_msg('ID tidak valid', 'danger');
			return $this->redirect("spk");
		}

		$db = $this->GetModel();
		$tablename = $this->tablename;

		// Cek file apakah diupload
		if (!isset($_FILES['pdf_file']) || $_FILES['pdf_file']['error'] != 0) {
			$this->set_flash_msg('File tidak terpilih atau rusak', 'danger');
			return $this->redirect("spk");
		}

		$file = $_FILES['pdf_file'];
		$ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

		if ($ext !== 'pdf') {
			$this->set_flash_msg('Hanya file PDF yang diizinkan', 'danger');
			return $this->redirect("spk");
		}

		// Tentukan folder (pastikan folder uploads/files sudah ada di root project)
		$upload_dir = 'uploads/files/';
		if (!is_dir($upload_dir)) {
			mkdir($upload_dir, 0777, true);
		}

		// Ambil file lama dari database untuk dihapus
		$db->where('id', $rec_id);
		$old_record = $db->getOne($tablename);
		$old_file = !empty($old_record['file_pdf_mitra']) ? $old_record['file_pdf_mitra'] : '';

		$filename = 'spk_mitra_' . $rec_id . '_' . time() . '.pdf';
		$target_path = $upload_dir . $filename;

		if (move_uploaded_file($file['tmp_name'], $target_path)) {
			// Hapus file lama jika ada
			if (!empty($old_file) && file_exists($old_file)) {
				unlink($old_file);
			}

			// Simpan path file ke kolom 'file_pdf_mitra' di database
			$db->where('id', $rec_id);
			$db->update($tablename, ['file_pdf_mitra' => $target_path]);
			
			$this->set_flash_msg('File PDF berhasil diupload', 'success');
		} else {
			$this->set_flash_msg('Gagal memindahkan file ke server', 'danger');
		}
		
		return $this->redirect("spk");
	}
}
