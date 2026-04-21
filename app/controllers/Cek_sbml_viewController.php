<?php 
/**
 * Cek_sbml_view Page Controller
 * @category  Controller
 */
class Cek_sbml_viewController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "cek_sbml_view";
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
		$fields = array("id", 
			"id_matrik_honor", 
			"id_petugas", 
			"jabatan", 
			"volume_spk", 
			"volume_bast", 
			"satuan", 
			"harga_satuan", 
			"total", 
			"id_rincian_output", 
			"id_nama_survei", 
			"uraian_kegiatan", 
			"id_bulan_pelaksanaan", 
			"tahun", 
			"jangka_waktu", 
			"nik", 
			"nama_petugas", 
			"bulan", 
			"kode_bulan", 
			"satuan2");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				cek_sbml_view.id LIKE ? OR 
				cek_sbml_view.id_matrik_honor LIKE ? OR 
				cek_sbml_view.id_petugas LIKE ? OR 
				cek_sbml_view.jabatan LIKE ? OR 
				cek_sbml_view.volume_spk LIKE ? OR 
				cek_sbml_view.volume_bast LIKE ? OR 
				cek_sbml_view.satuan LIKE ? OR 
				cek_sbml_view.harga_satuan LIKE ? OR 
				cek_sbml_view.total LIKE ? OR 
				cek_sbml_view.id_rincian_output LIKE ? OR 
				cek_sbml_view.id_nama_survei LIKE ? OR 
				cek_sbml_view.uraian_kegiatan LIKE ? OR 
				cek_sbml_view.id_bulan_pelaksanaan LIKE ? OR 
				cek_sbml_view.tahun LIKE ? OR 
				cek_sbml_view.jangka_waktu LIKE ? OR 
				cek_sbml_view.nik LIKE ? OR 
				cek_sbml_view.nama_petugas LIKE ? OR 
				cek_sbml_view.bulan LIKE ? OR 
				cek_sbml_view.kode_bulan LIKE ? OR 
				cek_sbml_view.satuan2 LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "cek_sbml_view/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("cek_sbml_view.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Cek Sbml View";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("cek_sbml_view/list.php", $data); //render the full page
	}
// No View Function Generated Because No Field is Defined as the Primary Key on the Database Table
}
