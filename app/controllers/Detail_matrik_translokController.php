<?php 
/**
 * Detail_matrik_translok Page Controller
 * @category  Controller
 */
class Detail_matrik_translokController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "detail_matrik_translok";
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
		$fields = array("detail_matrik_translok.id", 
			"user.nama_user AS user_nama_user", 
			"detail_matrik_translok.volume", 
			"detail_matrik_translok.harga_satuan", 
			"detail_matrik_translok.total", 
			"detail_matrik_translok.keterangan", 
			"detail_matrik_translok.st", 
			"detail_matrik_translok.visum", 
			"detail_matrik_translok.s_non_pkd", 
			"detail_matrik_translok.laporan", 
			"detail_matrik_translok.dokumentasi", 
			"detail_matrik_translok.selesai_fp", 
			"detail_matrik_translok.pengajuan_spm", 
			"detail_matrik_translok.terbit_sp2d", 
			"detail_matrik_translok.tgl_sp2d", 
			"matrik_translok.tahun AS matrik_translok_tahun", 
			"matrik_translok.uraian_pengajuan AS matrik_translok_uraian_pengajuan", 
			"master_bulan.bulan AS master_bulan_bulan");
		$pagination = $this->get_pagination(1000); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				detail_matrik_translok.id LIKE ? OR 
				detail_matrik_translok.id_matrik_translok LIKE ? OR 
				detail_matrik_translok.id_user LIKE ? OR 
				user.nama_user LIKE ? OR 
				detail_matrik_translok.volume LIKE ? OR 
				detail_matrik_translok.satuan LIKE ? OR 
				detail_matrik_translok.harga_satuan LIKE ? OR 
				detail_matrik_translok.total LIKE ? OR 
				detail_matrik_translok.cek_double LIKE ? OR 
				detail_matrik_translok.keterangan LIKE ? OR 
				detail_matrik_translok.st LIKE ? OR 
				detail_matrik_translok.visum LIKE ? OR 
				detail_matrik_translok.s_non_pkd LIKE ? OR 
				detail_matrik_translok.laporan LIKE ? OR 
				detail_matrik_translok.dokumentasi LIKE ? OR 
				detail_matrik_translok.selesai_fp LIKE ? OR 
				detail_matrik_translok.pengajuan_spm LIKE ? OR 
				detail_matrik_translok.terbit_sp2d LIKE ? OR 
				detail_matrik_translok.tgl_sp2d LIKE ? OR 
				matrik_translok.id LIKE ? OR 
				matrik_translok.id_tim LIKE ? OR 
				matrik_translok.id_nama_survei LIKE ? OR 
				matrik_translok.id_bulan_pengajuan LIKE ? OR 
				matrik_translok.tahun LIKE ? OR 
				matrik_translok.cek_double LIKE ? OR 
				matrik_translok.create_by LIKE ? OR 
				matrik_translok.create_at LIKE ? OR 
				matrik_translok.harga_satuan_honor LIKE ? OR 
				matrik_translok.uraian_pengajuan LIKE ? OR 
				user.id LIKE ? OR 
				user.nip LIKE ? OR 
				user.foto LIKE ? OR 
				user.id_tim LIKE ? OR 
				user.status LIKE ? OR 
				user.password LIKE ? OR 
				user.email LIKE ? OR 
				user.role LIKE ? OR 
				master_satuan.id LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				master_bulan.kode_bulan LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "detail_matrik_translok/search.php";
		}
		$db->join("matrik_translok", "detail_matrik_translok.id_matrik_translok = matrik_translok.id", "LEFT");
		$db->join("user", "detail_matrik_translok.id_user = user.id", "INNER");
		$db->join("master_satuan", "detail_matrik_translok.satuan = master_satuan.id", "INNER");
		$db->join("master_bulan", "matrik_translok.id_bulan_pengajuan = master_bulan.id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("detail_matrik_translok.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Detail Matrik Translok";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("detail_matrik_translok/list.php", $data); //render the full page
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
		$fields = array("detail_matrik_translok.id", 
			"detail_matrik_translok.id_matrik_translok", 
			"detail_matrik_translok.id_user", 
			"detail_matrik_translok.volume", 
			"detail_matrik_translok.satuan", 
			"detail_matrik_translok.harga_satuan", 
			"detail_matrik_translok.total", 
			"detail_matrik_translok.cek_double", 
			"detail_matrik_translok.st", 
			"detail_matrik_translok.visum", 
			"detail_matrik_translok.s_non_pkd", 
			"detail_matrik_translok.laporan", 
			"detail_matrik_translok.dokumentasi", 
			"detail_matrik_translok.selesai_fp", 
			"detail_matrik_translok.pengajuan_spm", 
			"detail_matrik_translok.terbit_sp2d", 
			"detail_matrik_translok.tgl_sp2d", 
			"detail_matrik_translok.keterangan", 
			"master_bulan.id AS master_bulan_id", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"master_bulan.kode_bulan AS master_bulan_kode_bulan", 
			"matrik_translok.id AS matrik_translok_id", 
			"matrik_translok.id_tim AS matrik_translok_id_tim", 
			"matrik_translok.id_nama_survei AS matrik_translok_id_nama_survei", 
			"matrik_translok.id_bulan_pengajuan AS matrik_translok_id_bulan_pengajuan", 
			"matrik_translok.tahun AS matrik_translok_tahun", 
			"matrik_translok.cek_double AS matrik_translok_cek_double", 
			"matrik_translok.create_by AS matrik_translok_create_by", 
			"matrik_translok.create_at AS matrik_translok_create_at", 
			"matrik_translok.harga_satuan_honor AS matrik_translok_harga_satuan_honor", 
			"matrik_translok.uraian_pengajuan AS matrik_translok_uraian_pengajuan", 
			"user.id AS user_id", 
			"user.nip AS user_nip", 
			"user.nama_user AS user_nama_user", 
			"user.foto AS user_foto", 
			"user.id_tim AS user_id_tim", 
			"user.status AS user_status", 
			"user.password AS user_password", 
			"user.email AS user_email", 
			"user.role AS user_role", 
			"master_satuan.id AS master_satuan_id", 
			"master_satuan.satuan AS master_satuan_satuan", 
			"master_bulan.id AS master_bulan_id", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"master_bulan.kode_bulan AS master_bulan_kode_bulan");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("detail_matrik_translok.id", $rec_id);; //select record based on primary key
		}
		$db->join("matrik_translok", "detail_matrik_translok.id_matrik_translok = matrik_translok.id", "LEFT ");
		$db->join("user", "detail_matrik_translok.id_user = user.id", "INNER ");
		$db->join("master_satuan", "detail_matrik_translok.satuan = master_satuan.id", "INNER ");
		$db->join("master_bulan", "matrik_translok.id_bulan_pengajuan = master_bulan.id", "INNER ");  
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View Detail Matrik Translok";
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
		return $this->render_view("detail_matrik_translok/view.php", $record);
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
			$fields = $this->fields = array("id_matrik_translok","id_user","volume","satuan","keterangan","harga_satuan","total");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'id_matrik_translok' => 'required',
				'id_user' => 'required',
				'volume' => 'required|numeric',
				'satuan' => 'required',
				'keterangan' => 'required',
				'harga_satuan' => 'required|numeric',
				'total' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'id_matrik_translok' => 'sanitize_string',
				'id_user' => 'sanitize_string',
				'volume' => 'sanitize_string',
				'satuan' => 'sanitize_string',
				'keterangan' => 'sanitize_string',
				'harga_satuan' => 'sanitize_string',
				'total' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
		# Statement to execute before adding record
		// Buat nilai cek_double
$cek_double = $modeldata['id_matrik_translok'] . $modeldata['id_user'];
// Cek duplikat
$exist = $db->rawQueryOne(
    "SELECT id FROM detail_matrik_translok WHERE cek_double = ?",
    array($cek_double)
);
if($exist){
    //PERTAHANKAN HALAMAN SEBELUMNYA
    $id_matrik_translok = $_POST['id_matrik_translok'] ?? '';
        $kegiatan = '';
        if ($id_matrik_translok) {
            $this->db->where('id', $id_matrik_translok);
            $row      = $this->db->getOne('matrik_translok', 'uraian_pengajuan');
            $kegiatan = $row['uraian_pengajuan'] ?? '';
        }
    // Tampilkan pesan
    $this->set_flash_msg("Data Petugas sudah ada!", "danger");
    // Redirect kembali ke halaman form add tanpa crash
    $this->redirect(
    "detail_matrik_translok/add?"
    . "id_matrik_translok=" . urlencode($id_matrik_translok)
            . "&harga_satuan=" . urlencode($_POST['harga_satuan'])
            . "&kegiatan=" . urlencode($kegiatan)
        );
        exit;
    return false;
}
// Lanjut insert
$modeldata['cek_double'] = $cek_double;
		# End of before add statement
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
		# Statement to execute after adding record
		$id_matrik_translok = $_POST['id_matrik_translok'] ?? '';
$kegiatan = '';
$bulan = '';
$tahun = '';
if ($id_matrik_translok) {
    $this->db->where('id', $id_matrik_translok);
    $row = $this->db->getOne(
        'matrik_translok',
        'uraian_pengajuan, id_bulan_pengajuan, tahun'
    );
    $kegiatan = $row['uraian_pengajuan'] ?? '';
    $bulan    = $row['id_bulan_pengajuan'] ?? '';
    $tahun    = $row['tahun'] ?? '';
}
$this->set_flash_msg("Data berhasil disimpan", "success");
return $this->redirect(
    "detail_matrik_translok/add?"
    . "id_matrik_translok=" . urlencode($id_matrik_translok)
    . "&harga_satuan=" . urlencode($_POST['harga_satuan'] ?? '')
    . "&kegiatan=" . urlencode($kegiatan)
    . "&bulan=" . urlencode($bulan)
    . "&tahun=" . urlencode($tahun)
);
exit;
		# End of after add statement
					$this->set_flash_msg("📢 Sukses, Data berhasil disimpan", "success");
					return	$this->redirect("detail_matrik_translok");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Tambah Detail Matrik Translok";
		$this->render_view("detail_matrik_translok/add.php");
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
		$fields = $this->fields = array("id","id_matrik_translok","id_user","volume","satuan","keterangan","harga_satuan","total");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'id_matrik_translok' => 'required',
				'id_user' => 'required',
				'volume' => 'required|numeric',
				'satuan' => 'required',
				'keterangan' => 'required',
				'harga_satuan' => 'required|numeric',
				'total' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'id_matrik_translok' => 'sanitize_string',
				'id_user' => 'sanitize_string',
				'volume' => 'sanitize_string',
				'satuan' => 'sanitize_string',
				'keterangan' => 'sanitize_string',
				'harga_satuan' => 'sanitize_string',
				'total' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("detail_matrik_translok.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
		# Statement to execute after adding record
			$id_matrik_translok = $_POST['id_matrik_translok'] ?? '';
$this->set_flash_msg("Data berhasil diperbarui", "success");
$this->redirect(
    "detail_matrik_translok/list/id_matrik_translok/" . urlencode($id_matrik_translok)
);
exit;
		# End of after update statement
					$this->set_flash_msg("📢 Data berhasil diupdate", "success");
					return $this->redirect("detail_matrik_translok");
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
						return	$this->redirect("detail_matrik_translok");
					}
				}
			}
		}
		$db->where("detail_matrik_translok.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Detail Matrik Translok";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("detail_matrik_translok/edit.php", $data);
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
		$fields = $this->fields = array("id","id_matrik_translok","id_user","volume","satuan","keterangan","harga_satuan","total");
		$page_error = null;
		if($formdata){
			$postdata = array();
			$fieldname = $formdata['name'];
			$fieldvalue = $formdata['value'];
			$postdata[$fieldname] = $fieldvalue;
			$postdata = $this->format_request_data($postdata);
			$this->rules_array = array(
				'id_matrik_translok' => 'required',
				'id_user' => 'required',
				'volume' => 'required|numeric',
				'satuan' => 'required',
				'keterangan' => 'required',
				'harga_satuan' => 'required|numeric',
				'total' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'id_matrik_translok' => 'sanitize_string',
				'id_user' => 'sanitize_string',
				'volume' => 'sanitize_string',
				'satuan' => 'sanitize_string',
				'keterangan' => 'sanitize_string',
				'harga_satuan' => 'sanitize_string',
				'total' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the formdata
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("detail_matrik_translok.id", $rec_id);;
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
		$db->where("detail_matrik_translok.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("🗑 Data berhasil dihapus", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("detail_matrik_translok");
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
		$fields = array("detail_matrik_translok.id", 
			"user.nama_user AS user_nama_user", 
			"detail_matrik_translok.volume", 
			"detail_matrik_translok.harga_satuan", 
			"detail_matrik_translok.total", 
			"detail_matrik_translok.keterangan", 
			"detail_matrik_translok.st", 
			"detail_matrik_translok.visum", 
			"detail_matrik_translok.s_non_pkd", 
			"detail_matrik_translok.laporan", 
			"detail_matrik_translok.dokumentasi", 
			"detail_matrik_translok.selesai_fp", 
			"detail_matrik_translok.pengajuan_spm", 
			"detail_matrik_translok.terbit_sp2d", 
			"detail_matrik_translok.tgl_sp2d", 
			"matrik_translok.tahun AS matrik_translok_tahun", 
			"matrik_translok.uraian_pengajuan AS matrik_translok_uraian_pengajuan", 
			"master_bulan.bulan AS master_bulan_bulan");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				detail_matrik_translok.id LIKE ? OR 
				detail_matrik_translok.id_matrik_translok LIKE ? OR 
				detail_matrik_translok.id_user LIKE ? OR 
				user.nama_user LIKE ? OR 
				detail_matrik_translok.volume LIKE ? OR 
				detail_matrik_translok.satuan LIKE ? OR 
				master_satuan.satuan LIKE ? OR 
				detail_matrik_translok.harga_satuan LIKE ? OR 
				detail_matrik_translok.total LIKE ? OR 
				detail_matrik_translok.cek_double LIKE ? OR 
				detail_matrik_translok.keterangan LIKE ? OR 
				detail_matrik_translok.st LIKE ? OR 
				detail_matrik_translok.visum LIKE ? OR 
				detail_matrik_translok.s_non_pkd LIKE ? OR 
				detail_matrik_translok.laporan LIKE ? OR 
				detail_matrik_translok.dokumentasi LIKE ? OR 
				detail_matrik_translok.selesai_fp LIKE ? OR 
				detail_matrik_translok.pengajuan_spm LIKE ? OR 
				detail_matrik_translok.terbit_sp2d LIKE ? OR 
				detail_matrik_translok.tgl_sp2d LIKE ? OR 
				matrik_translok.id LIKE ? OR 
				matrik_translok.id_tim LIKE ? OR 
				matrik_translok.id_nama_survei LIKE ? OR 
				matrik_translok.id_bulan_pengajuan LIKE ? OR 
				matrik_translok.tahun LIKE ? OR 
				matrik_translok.cek_double LIKE ? OR 
				matrik_translok.create_by LIKE ? OR 
				matrik_translok.create_at LIKE ? OR 
				matrik_translok.harga_satuan_honor LIKE ? OR 
				matrik_translok.uraian_pengajuan LIKE ? OR 
				user.id LIKE ? OR 
				user.nip LIKE ? OR 
				user.foto LIKE ? OR 
				user.id_tim LIKE ? OR 
				user.status LIKE ? OR 
				user.password LIKE ? OR 
				user.email LIKE ? OR 
				user.role LIKE ? OR 
				master_satuan.id LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				master_bulan.kode_bulan LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "detail_matrik_translok/search.php";
		}
		$db->join("matrik_translok", "detail_matrik_translok.id_matrik_translok = matrik_translok.id", "LEFT");
		$db->join("user", "detail_matrik_translok.id_user = user.id", "INNER");
		$db->join("master_satuan", "detail_matrik_translok.satuan = master_satuan.id", "INNER");
		$db->join("master_bulan", "matrik_translok.id_bulan_pengajuan = master_bulan.id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("detail_matrik_translok.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Detail Matrik Translok";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("detail_matrik_translok/list_tu.php", $data); //render the full page
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
		$fields = array("detail_matrik_translok.id", 
			"user.nama_user AS user_nama_user", 
			"detail_matrik_translok.volume", 
			"detail_matrik_translok.harga_satuan", 
			"detail_matrik_translok.total", 
			"detail_matrik_translok.keterangan", 
			"detail_matrik_translok.st", 
			"detail_matrik_translok.visum", 
			"detail_matrik_translok.s_non_pkd", 
			"detail_matrik_translok.laporan", 
			"detail_matrik_translok.dokumentasi", 
			"detail_matrik_translok.selesai_fp", 
			"detail_matrik_translok.pengajuan_spm", 
			"detail_matrik_translok.terbit_sp2d", 
			"detail_matrik_translok.tgl_sp2d", 
			"matrik_translok.tahun AS matrik_translok_tahun", 
			"matrik_translok.uraian_pengajuan AS matrik_translok_uraian_pengajuan", 
			"master_bulan.bulan AS master_bulan_bulan");
		$pagination = $this->get_pagination(1000); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				detail_matrik_translok.id LIKE ? OR 
				detail_matrik_translok.id_matrik_translok LIKE ? OR 
				detail_matrik_translok.id_user LIKE ? OR 
				user.nama_user LIKE ? OR 
				detail_matrik_translok.volume LIKE ? OR 
				detail_matrik_translok.satuan LIKE ? OR 
				detail_matrik_translok.harga_satuan LIKE ? OR 
				detail_matrik_translok.total LIKE ? OR 
				detail_matrik_translok.cek_double LIKE ? OR 
				detail_matrik_translok.keterangan LIKE ? OR 
				detail_matrik_translok.st LIKE ? OR 
				detail_matrik_translok.visum LIKE ? OR 
				detail_matrik_translok.s_non_pkd LIKE ? OR 
				detail_matrik_translok.laporan LIKE ? OR 
				detail_matrik_translok.dokumentasi LIKE ? OR 
				detail_matrik_translok.selesai_fp LIKE ? OR 
				detail_matrik_translok.pengajuan_spm LIKE ? OR 
				detail_matrik_translok.terbit_sp2d LIKE ? OR 
				detail_matrik_translok.tgl_sp2d LIKE ? OR 
				matrik_translok.id LIKE ? OR 
				matrik_translok.id_tim LIKE ? OR 
				matrik_translok.id_nama_survei LIKE ? OR 
				matrik_translok.id_bulan_pengajuan LIKE ? OR 
				matrik_translok.tahun LIKE ? OR 
				matrik_translok.cek_double LIKE ? OR 
				matrik_translok.create_by LIKE ? OR 
				matrik_translok.create_at LIKE ? OR 
				matrik_translok.harga_satuan_honor LIKE ? OR 
				matrik_translok.uraian_pengajuan LIKE ? OR 
				user.id LIKE ? OR 
				user.nip LIKE ? OR 
				user.foto LIKE ? OR 
				user.id_tim LIKE ? OR 
				user.status LIKE ? OR 
				user.password LIKE ? OR 
				user.email LIKE ? OR 
				user.role LIKE ? OR 
				master_satuan.id LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				master_bulan.kode_bulan LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "detail_matrik_translok/search.php";
		}
		$db->join("matrik_translok", "detail_matrik_translok.id_matrik_translok = matrik_translok.id", "LEFT");
		$db->join("user", "detail_matrik_translok.id_user = user.id", "INNER");
		$db->join("master_satuan", "detail_matrik_translok.satuan = master_satuan.id", "INNER");
		$db->join("master_bulan", "matrik_translok.id_bulan_pengajuan = master_bulan.id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("detail_matrik_translok.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Detail Matrik Translok";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("detail_matrik_translok/list_sp2d_clear.php", $data); //render the full page
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
		//Funsi toggle status List TU MATRIK TRANSLOK
	function toggle_field(){
	 
    header('Content-Type: application/json');

    $id = $_POST['id'] ?? null;
    $field = $_POST['field'] ?? null;
    

    
    // validasi
    $allowed_fields = ['st','visum','s_non_pkd','laporan','dokumentasi','selesai_fp','pengajuan_spm','terbit_sp2d'];
    if(!$id || !$field || !in_array($field, $allowed_fields)){
        echo json_encode(['status'=>'error','msg'=>'ID atau field tidak valid']);
        exit;
    }

    $db = $this->GetModel();
    $row = $db->where("id", $id)->getOne($this->tablename, array_merge([$field], ['tgl_sp2d']));

    if(!$row){
        echo json_encode(['status'=>'error','msg'=>'Data tidak ditemukan']);
        exit;
    }

    // toggle 1 ↔ 0
    $new = ((int)$row[$field] === 1) ? 0 : 1;

    $update = [$field => $new];

    // jika field terbit_sp2d, atur tanggal otomatis
    $tgl_sp2d = null;
    if($field=='terbit_sp2d'){
        if($new==1){
            $tgl_sp2d = date('d M Y'); // format YYYY-MM-DD
            $update['tgl_sp2d'] = $tgl_sp2d;
        } else {
            $update['tgl_sp2d'] = '';
        }
    }

    $db->where("id",$id)->update($this->tablename,$update);

    $icons = [
        1 => 'bi-check-circle-fill text-success',
        0 => 'bi-x-circle-fill text-danger'
    ];

    echo json_encode([
        'status'=>'ok',
        'value'=>$new,
        'html'=>'<i class="bi '.$icons[$new].'"></i>',
        'tgl_sp2d'=>$tgl_sp2d
    ]);
    exit;
}
	
}
