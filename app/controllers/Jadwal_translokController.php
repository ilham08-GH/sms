<?php 
/**
 * Jadwal_translok Page Controller
 * @category  Controller
 */
class Jadwal_translokController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "jadwal_translok";
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
		$fields = array("jadwal_translok.id", 
			"user.nama_user AS user_nama_user", 
			"master_survei.nama_survei AS master_survei_nama_survei", 
			"jadwal_translok.tgl_translok");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				jadwal_translok.id LIKE ? OR 
				jadwal_translok.id_user LIKE ? OR 
				user.nama_user LIKE ? OR 
				jadwal_translok.id_nama_survei LIKE ? OR 
				master_survei.nama_survei LIKE ? OR 
				jadwal_translok.tgl_translok LIKE ? OR 
				user.id LIKE ? OR 
				user.nip LIKE ? OR 
				user.foto LIKE ? OR 
				user.id_tim LIKE ? OR 
				user.status LIKE ? OR 
				user.password LIKE ? OR 
				user.email LIKE ? OR 
				user.role LIKE ? OR 
				master_survei.id LIKE ? OR 
				jadwal_translok.cek_double LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "jadwal_translok/search.php";
		}
		$db->join("user", "jadwal_translok.id_user = user.id", "LEFT");
		$db->join("master_survei", "jadwal_translok.id_nama_survei = master_survei.id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("jadwal_translok.id", ORDER_TYPE);
		}
		$db->where("id_user ='". USER_ID . "'");
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $pagination, $fields);
		$records_count = count($records);
		$total_records = intval($tc->totalCount);
		$page_limit = $pagination[1];
		$total_pages = ceil($total_records / $page_limit);
		if(	!empty($records)){
			foreach($records as &$record){
				$record['tgl_translok'] = format_date($record['tgl_translok'],'d M Y');
			}
		}
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = $records_count;
		$data->total_records = $total_records;
		$data->total_page = $total_pages;
		if($db->getLastError()){
			$this->set_page_error();
		}
		$page_title = $this->view->page_title = "Jadwal Translok";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("jadwal_translok/list.php", $data); //render the full page
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
		$fields = array("jadwal_translok.id", 
			"jadwal_translok.id_user", 
			"jadwal_translok.id_nama_survei", 
			"jadwal_translok.tgl_translok", 
			"user.id AS user_id", 
			"user.nip AS user_nip", 
			"user.nama_user AS user_nama_user", 
			"user.foto AS user_foto", 
			"user.id_tim AS user_id_tim", 
			"user.status AS user_status", 
			"user.password AS user_password", 
			"user.email AS user_email", 
			"user.role AS user_role", 
			"master_survei.id AS master_survei_id", 
			"master_survei.nama_survei AS master_survei_nama_survei", 
			"jadwal_translok.cek_double");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("jadwal_translok.id", $rec_id);; //select record based on primary key
		}
		$db->join("user", "jadwal_translok.id_user = user.id", "LEFT ");
		$db->join("master_survei", "jadwal_translok.id_nama_survei = master_survei.id", "INNER ");  
		$record = $db->getOne($tablename, $fields );
		if($record){
			$record['tgl_translok'] = format_date($record['tgl_translok'],'d M Y');
			$page_title = $this->view->page_title = "View  Jadwal Translok";
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
		return $this->render_view("jadwal_translok/view.php", $record);
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
			$fields = $this->fields = array("id_user","id_nama_survei","tgl_translok");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'id_nama_survei' => 'required',
				'tgl_translok' => 'required',
			);
			$this->sanitize_array = array(
				'id_nama_survei' => 'sanitize_string',
				'tgl_translok' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['id_user'] = USER_ID;
			if($this->validated()){
		# Statement to execute before adding record
		// Buat nilai cek_double
$cek_double = $modeldata['id_user'] . $modeldata['tgl_translok'];
// Cek duplikat
$exist = $db->rawQueryOne(
    "SELECT id FROM jadwal_translok WHERE cek_double = ?",
    array($cek_double)
);
if($exist){
    // Tampilkan pesan
    $this->set_flash_msg("Data tanggal sudah ada! tidak boleh Translok di tanggal yang sama.", "danger");
    // Redirect kembali ke halaman form add tanpa crash
    $this->redirect("jadwal_translok");
    return false;
}
// Lanjut insert
$modeldata['cek_double'] = $cek_double;
		# End of before add statement
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Data berhasil disimpan", "success");
					return	$this->redirect("jadwal_translok");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Buat Jadwal Translok";
		$this->render_view("jadwal_translok/add.php");
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
		$fields = $this->fields = array("id","id_user","id_nama_survei","tgl_translok");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'id_nama_survei' => 'required',
				'tgl_translok' => 'required',
			);
			$this->sanitize_array = array(
				'id_nama_survei' => 'sanitize_string',
				'tgl_translok' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['id_user'] = USER_ID;
			if($this->validated()){
				$db->where("jadwal_translok.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("jadwal_translok");
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
						return	$this->redirect("jadwal_translok");
					}
				}
			}
		}
		$db->where("jadwal_translok.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Jadwal Translok";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("jadwal_translok/edit.php", $data);
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
		$fields = $this->fields = array("id","id_user","id_nama_survei","tgl_translok");
		$page_error = null;
		if($formdata){
			$postdata = array();
			$fieldname = $formdata['name'];
			$fieldvalue = $formdata['value'];
			$postdata[$fieldname] = $fieldvalue;
			$postdata = $this->format_request_data($postdata);
			$this->rules_array = array(
				'id_nama_survei' => 'required',
				'tgl_translok' => 'required',
			);
			$this->sanitize_array = array(
				'id_nama_survei' => 'sanitize_string',
				'tgl_translok' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the formdata
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("jadwal_translok.id", $rec_id);;
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
		$db->where("jadwal_translok.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Berhapus menghapus data", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("jadwal_translok");
	}
}
