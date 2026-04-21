<?php 
/**
 * Jadwal_translok_view Page Controller
 * @category  Controller
 */
class Jadwal_translok_viewController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "jadwal_translok_view";
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
		$fields = array("nama_user", 
			"nama_survei", 
			"tgl_translok", 
			"bulan", 
			"tahun");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				jadwal_translok_view.id LIKE ? OR 
				jadwal_translok_view.id_user LIKE ? OR 
				jadwal_translok_view.id_nama_survei LIKE ? OR 
				jadwal_translok_view.nama_user LIKE ? OR 
				jadwal_translok_view.nama_survei LIKE ? OR 
				jadwal_translok_view.tgl_translok LIKE ? OR 
				jadwal_translok_view.cek_double LIKE ? OR 
				jadwal_translok_view.nip LIKE ? OR 
				jadwal_translok_view.foto LIKE ? OR 
				jadwal_translok_view.id_tim LIKE ? OR 
				jadwal_translok_view.status LIKE ? OR 
				jadwal_translok_view.password LIKE ? OR 
				jadwal_translok_view.email LIKE ? OR 
				jadwal_translok_view.role LIKE ? OR 
				jadwal_translok_view.bulan LIKE ? OR 
				jadwal_translok_view.tahun LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "jadwal_translok_view/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("tgl_translok", "ASC");
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		if(!empty($request->jadwal_translok_view_nama_user)){
			$val = $request->jadwal_translok_view_nama_user;
			$db->where("jadwal_translok_view.nama_user", $val , "=");
		}
		if(!empty($request->jadwal_translok_view_bulan)){
			$val = $request->jadwal_translok_view_bulan;
			$db->where("jadwal_translok_view.bulan", $val , "=");
		}
		if(!empty($request->jadwal_translok_view_tahun)){
			$val = $request->jadwal_translok_view_tahun;
			$db->where("jadwal_translok_view.tahun", $val , "=");
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
		$page_title = $this->view->page_title = "Jadwal Translok View";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("jadwal_translok_view/list.php", $data); //render the full page
	}
// No View Function Generated Because No Field is Defined as the Primary Key on the Database Table
}
