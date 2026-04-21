<?php 
/**
 * Sbml_view Page Controller
 * @category  Controller
 */
class Sbml_viewController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "sbml_view";
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
		$fields = array("id_petugas", 
			"nik", 
			"nama_petugas", 
			"alamat", 
			"kecamatan", 
			"bulan_tahun", 
			"total_honor", 
			"'Cek Daftar Survei' AS cekdaftarsurvei", 
			"id");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				sbml_view.id_petugas LIKE ? OR 
				sbml_view.nik LIKE ? OR 
				sbml_view.nama_petugas LIKE ? OR 
				sbml_view.alamat LIKE ? OR 
				sbml_view.kecamatan LIKE ? OR 
				sbml_view.uraian_kegiatan LIKE ? OR 
				sbml_view.rincian_output LIKE ? OR 
				sbml_view.nama_survei LIKE ? OR 
				sbml_view.bulan_tahun LIKE ? OR 
				sbml_view.total_honor LIKE ? OR 
				sbml_view.id LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "sbml_view/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("id", "DESC");
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
		$page_title = $this->view->page_title = "SBML View";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("sbml_view/list.php", $data); //render the full page
	}
// No View Function Generated Because No Field is Defined as the Primary Key on the Database Table
}
