<?php 
/**
 * Sbml_detail_view Page Controller
 * @category  Controller
 */
class Sbml_detail_viewController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "sbml_detail_view";
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
		$fields = array("rincian_output", 
			"uraian_kegiatan", 
			"volume_spk", 
			"volume_bast", 
			"harga_satuan", 
			"volume_bast*harga_satuan AS totalhonor", 
			"nama_petugas", 
			"alamat", 
			"kecamatan", 
			"bulan_tahun");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				sbml_detail_view.rincian_output LIKE ? OR 
				sbml_detail_view.id_rincian_output LIKE ? OR 
				sbml_detail_view.id LIKE ? OR 
				sbml_detail_view.id_petugas LIKE ? OR 
				sbml_detail_view.status_bast LIKE ? OR 
				sbml_detail_view.status_spk LIKE ? OR 
				sbml_detail_view.uraian_kegiatan LIKE ? OR 
				sbml_detail_view.volume_spk LIKE ? OR 
				sbml_detail_view.volume_bast LIKE ? OR 
				sbml_detail_view.harga_satuan LIKE ? OR 
				sbml_detail_view.total LIKE ? OR 
				sbml_detail_view.tahun LIKE ? OR 
				sbml_detail_view.jangka_waktu LIKE ? OR 
				sbml_detail_view.harga_satuan_honor LIKE ? OR 
				sbml_detail_view.nik LIKE ? OR 
				sbml_detail_view.nama_petugas LIKE ? OR 
				sbml_detail_view.alamat LIKE ? OR 
				sbml_detail_view.kecamatan LIKE ? OR 
				sbml_detail_view.pekerjaan LIKE ? OR 
				sbml_detail_view.email LIKE ? OR 
				sbml_detail_view.sobat_id LIKE ? OR 
				sbml_detail_view.status_petugas LIKE ? OR 
				sbml_detail_view.jabatan LIKE ? OR 
				sbml_detail_view.keterangan_jabatan LIKE ? OR 
				sbml_detail_view.satuan LIKE ? OR 
				sbml_detail_view.status_rincian_output LIKE ? OR 
				sbml_detail_view.nama_survei LIKE ? OR 
				sbml_detail_view.bulan LIKE ? OR 
				sbml_detail_view.kode_bulan LIKE ? OR 
				sbml_detail_view.bulan_tahun LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "sbml_detail_view/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("sbml_detail_view.id_rincian_output", ORDER_TYPE);
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		if(!empty($request->sbml_detail_view_id_petugas)){
			$val = $request->sbml_detail_view_id_petugas;
			$db->where("sbml_detail_view.id_petugas", $val , "=");
		}
		if(!empty($request->sbml_detail_view_bulan_tahun)){
			$val = $request->sbml_detail_view_bulan_tahun;
			$db->where("sbml_detail_view.bulan_tahun", $val , "=");
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
		$page_title = $this->view->page_title = "Sbml Detail View";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("sbml_detail_view/list.php", $data); //render the full page
	}
// No View Function Generated Because No Field is Defined as the Primary Key on the Database Table
}
