<?php 
/**
 * View_spk Page Controller
 * @category  Controller
 */
class View_spkController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "view_spk";
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
		$fields = array("volume_spk", 
			"volume_bast", 
			"harga_satuan", 
			"total", 
			"status_spk", 
			"uraian_kegiatan", 
			"tahun", 
			"jangka_waktu", 
			"harga_satuan_honor", 
			"nik", 
			"nama_petugas", 
			"alamat", 
			"kecamatan", 
			"pekerjaan", 
			"email", 
			"sobat_id", 
			"status_petugas", 
			"jabatan", 
			"keterangan_jabatan", 
			"satuan", 
			"rincian_output", 
			"status_rincian_output", 
			"nama_survei", 
			"bulan", 
			"kode_bulan", 
			"id");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				view_spk.volume_spk LIKE ? OR 
				view_spk.volume_bast LIKE ? OR 
				view_spk.harga_satuan LIKE ? OR 
				view_spk.total LIKE ? OR 
				view_spk.status_spk LIKE ? OR 
				view_spk.uraian_kegiatan LIKE ? OR 
				view_spk.tahun LIKE ? OR 
				view_spk.jangka_waktu LIKE ? OR 
				view_spk.harga_satuan_honor LIKE ? OR 
				view_spk.nik LIKE ? OR 
				view_spk.nama_petugas LIKE ? OR 
				view_spk.alamat LIKE ? OR 
				view_spk.kecamatan LIKE ? OR 
				view_spk.pekerjaan LIKE ? OR 
				view_spk.email LIKE ? OR 
				view_spk.sobat_id LIKE ? OR 
				view_spk.status_petugas LIKE ? OR 
				view_spk.jabatan LIKE ? OR 
				view_spk.keterangan_jabatan LIKE ? OR 
				view_spk.satuan LIKE ? OR 
				view_spk.rincian_output LIKE ? OR 
				view_spk.status_rincian_output LIKE ? OR 
				view_spk.nama_survei LIKE ? OR 
				view_spk.bulan LIKE ? OR 
				view_spk.kode_bulan LIKE ? OR 
				view_spk.id LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "view_spk/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("view_spk.volume_spk", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "View Spk";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("view_spk/list.php", $data); //render the full page
	}
// No View Function Generated Because No Field is Defined as the Primary Key on the Database Table
}
