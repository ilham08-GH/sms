<?php 
/**
 * Rekap_translok_view Page Controller
 * @category  Controller
 */
class Rekap_translok_viewController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "rekap_translok_view";
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
		$fields = array("rekap_translok_view.bulan", 
			"rekap_translok_view.tahun", 
			"rekap_translok_view.nama_user", 
			"rekap_translok_view.nama_survei", 
			"rekap_translok_view.volume", 
			"rekap_translok_view.harga_satuan", 
			"rekap_translok_view.total");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				rekap_translok_view.id LIKE ? OR 
				rekap_translok_view.id_matrik_translok LIKE ? OR 
				rekap_translok_view.bulan LIKE ? OR 
				rekap_translok_view.id_user LIKE ? OR 
				rekap_translok_view.tahun LIKE ? OR 
				rekap_translok_view.nama_user LIKE ? OR 
				rekap_translok_view.nama_survei LIKE ? OR 
				rekap_translok_view.volume LIKE ? OR 
				rekap_translok_view.satuan LIKE ? OR 
				master_satuan.satuan LIKE ? OR 
				rekap_translok_view.harga_satuan LIKE ? OR 
				rekap_translok_view.total LIKE ? OR 
				rekap_translok_view.keterangan LIKE ? OR 
				rekap_translok_view.st LIKE ? OR 
				rekap_translok_view.visum LIKE ? OR 
				rekap_translok_view.s_non_pkd LIKE ? OR 
				rekap_translok_view.laporan LIKE ? OR 
				rekap_translok_view.dokumentasi LIKE ? OR 
				rekap_translok_view.selesai_fp LIKE ? OR 
				rekap_translok_view.pengajuan_spm LIKE ? OR 
				rekap_translok_view.terbit_sp2d LIKE ? OR 
				rekap_translok_view.tgl_sp2d LIKE ? OR 
				rekap_translok_view.id_tim LIKE ? OR 
				rekap_translok_view.id_nama_survei LIKE ? OR 
				rekap_translok_view.id_bulan_pengajuan LIKE ? OR 
				rekap_translok_view.nip LIKE ? OR 
				rekap_translok_view.kode_bulan LIKE ? OR 
				master_satuan.id LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "rekap_translok_view/search.php";
		}
		$db->join("master_satuan", "rekap_translok_view.satuan = master_satuan.id", "LEFT");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("rekap_translok_view.id", ORDER_TYPE);
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		if(!empty($request->rekap_translok_view_bulan)){
			$val = $request->rekap_translok_view_bulan;
			$db->where("rekap_translok_view.bulan", $val , "=");
		}
		if(!empty($request->rekap_translok_view_tahun)){
			$val = $request->rekap_translok_view_tahun;
			$db->where("rekap_translok_view.tahun", $val , "=");
		}
		if(!empty($request->rekap_translok_view_nama_user)){
			$val = $request->rekap_translok_view_nama_user;
			$db->where("rekap_translok_view.nama_user", $val , "=");
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
		$page_title = $this->view->page_title = "Rekap Translok View";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("rekap_translok_view/list.php", $data); //render the full page
	}
// No View Function Generated Because No Field is Defined as the Primary Key on the Database Table
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function translok_petugas($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("rekap_translok_view.bulan", 
			"rekap_translok_view.tahun", 
			"rekap_translok_view.nama_user", 
			"rekap_translok_view.nama_survei", 
			"rekap_translok_view.volume", 
			"rekap_translok_view.harga_satuan", 
			"rekap_translok_view.total");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				rekap_translok_view.id LIKE ? OR 
				rekap_translok_view.id_matrik_translok LIKE ? OR 
				rekap_translok_view.bulan LIKE ? OR 
				rekap_translok_view.id_user LIKE ? OR 
				rekap_translok_view.tahun LIKE ? OR 
				rekap_translok_view.nama_user LIKE ? OR 
				rekap_translok_view.nama_survei LIKE ? OR 
				rekap_translok_view.volume LIKE ? OR 
				rekap_translok_view.satuan LIKE ? OR 
				master_satuan.satuan LIKE ? OR 
				rekap_translok_view.harga_satuan LIKE ? OR 
				rekap_translok_view.total LIKE ? OR 
				rekap_translok_view.keterangan LIKE ? OR 
				rekap_translok_view.st LIKE ? OR 
				rekap_translok_view.visum LIKE ? OR 
				rekap_translok_view.s_non_pkd LIKE ? OR 
				rekap_translok_view.laporan LIKE ? OR 
				rekap_translok_view.dokumentasi LIKE ? OR 
				rekap_translok_view.selesai_fp LIKE ? OR 
				rekap_translok_view.pengajuan_spm LIKE ? OR 
				rekap_translok_view.terbit_sp2d LIKE ? OR 
				rekap_translok_view.tgl_sp2d LIKE ? OR 
				rekap_translok_view.id_tim LIKE ? OR 
				rekap_translok_view.id_nama_survei LIKE ? OR 
				rekap_translok_view.id_bulan_pengajuan LIKE ? OR 
				rekap_translok_view.nip LIKE ? OR 
				rekap_translok_view.kode_bulan LIKE ? OR 
				master_satuan.id LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "rekap_translok_view/search.php";
		}
		$db->join("master_satuan", "rekap_translok_view.satuan = master_satuan.id", "LEFT");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("rekap_translok_view.id", ORDER_TYPE);
		}
		$db->where("id_user='". USER_ID . "'");
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		if(!empty($request->rekap_translok_view_bulan)){
			$val = $request->rekap_translok_view_bulan;
			$db->where("rekap_translok_view.bulan", $val , "=");
		}
		if(!empty($request->rekap_translok_view_tahun)){
			$val = $request->rekap_translok_view_tahun;
			$db->where("rekap_translok_view.tahun", $val , "=");
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
		$page_title = $this->view->page_title = "Rekap Translok View";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("rekap_translok_view/translok_petugas.php", $data); //render the full page
	}
}
