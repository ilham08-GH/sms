<?php 
/**
 * Spk_view Page Controller
 * @category  Controller
 */
class Spk_viewController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "spk_view";
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
		$fields = array("spk_view.id", 
			"spk_view.status_spk", 
			"spk_view.volume_spk", 
			"spk_view.volume_bast", 
			"spk_view.harga_satuan", 
			"spk_view.total", 
			"spk_view.uraian_kegiatan", 
			"spk_view.tahun", 
			"spk_view.jangka_waktu", 
			"spk_view.harga_satuan_honor", 
			"spk_view.nik", 
			"spk_view.nama_petugas", 
			"spk_view.alamat", 
			"spk_view.kecamatan", 
			"spk_view.pekerjaan", 
			"spk_view.email", 
			"spk_view.sobat_id", 
			"spk_view.status_petugas", 
			"spk_view.jabatan", 
			"spk_view.keterangan_jabatan", 
			"spk_view.satuan", 
			"spk_view.rincian_output", 
			"spk_view.status_rincian_output", 
			"spk_view.nama_survei", 
			"spk_view.bulan", 
			"spk_view.kode_bulan", 
			"spk_view.bulan_tahun", 
			"spk_view.id_petugas", 
			"spk_view.status_bast", 
			"spk_view.id_rincian_output");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				spk_view.id LIKE ? OR 
				spk_view.status_spk LIKE ? OR 
				spk_view.volume_spk LIKE ? OR 
				spk_view.volume_bast LIKE ? OR 
				spk_view.harga_satuan LIKE ? OR 
				spk_view.total LIKE ? OR 
				spk_view.uraian_kegiatan LIKE ? OR 
				spk_view.tahun LIKE ? OR 
				spk_view.jangka_waktu LIKE ? OR 
				spk_view.harga_satuan_honor LIKE ? OR 
				spk_view.nik LIKE ? OR 
				spk_view.nama_petugas LIKE ? OR 
				spk_view.alamat LIKE ? OR 
				spk_view.kecamatan LIKE ? OR 
				spk_view.pekerjaan LIKE ? OR 
				spk_view.email LIKE ? OR 
				spk_view.sobat_id LIKE ? OR 
				spk_view.status_petugas LIKE ? OR 
				spk_view.jabatan LIKE ? OR 
				spk_view.keterangan_jabatan LIKE ? OR 
				spk_view.satuan LIKE ? OR 
				spk_view.rincian_output LIKE ? OR 
				spk_view.status_rincian_output LIKE ? OR 
				spk_view.nama_survei LIKE ? OR 
				spk_view.bulan LIKE ? OR 
				spk_view.kode_bulan LIKE ? OR 
				spk_view.bulan_tahun LIKE ? OR 
				spk_view.id_petugas LIKE ? OR 
				spk_view.status_bast LIKE ? OR 
				spk_view.id_rincian_output LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "spk_view/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("spk_view.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Spk View";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("spk_view/list.php", $data); //render the full page
	}
// No View Function Generated Because No Field is Defined as the Primary Key on the Database Table
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function rekap_honor($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("spk_view.bulan_tahun", 
			"spk_view.nama_petugas", 
			"spk_view.alamat", 
			"spk_view.kecamatan", 
			"spk_view.jabatan", 
			"spk_view.rincian_output", 
			"spk_view.nama_survei", 
			"spk_view.uraian_kegiatan", 
			"spk_view.harga_satuan", 
			"spk_view.volume_spk", 
			"spk_view.total", 
			"spk_view.volume_bast", 
			"volume_bast*harga_satuan AS total_honor", 
			"spk_view.satuan", 
			"spk_view.jangka_waktu");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				spk_view.id LIKE ? OR 
				spk_view.bulan_tahun LIKE ? OR 
				spk_view.nama_petugas LIKE ? OR 
				spk_view.alamat LIKE ? OR 
				spk_view.kecamatan LIKE ? OR 
				spk_view.jabatan LIKE ? OR 
				spk_view.rincian_output LIKE ? OR 
				spk_view.nama_survei LIKE ? OR 
				spk_view.uraian_kegiatan LIKE ? OR 
				spk_view.harga_satuan LIKE ? OR 
				spk_view.volume_spk LIKE ? OR 
				spk_view.total LIKE ? OR 
				spk_view.volume_bast LIKE ? OR 
				spk_view.satuan LIKE ? OR 
				spk_view.jangka_waktu LIKE ? OR 
				spk_view.status_spk LIKE ? OR 
				spk_view.status_bast LIKE ? OR 
				spk_view.tahun LIKE ? OR 
				spk_view.harga_satuan_honor LIKE ? OR 
				spk_view.nik LIKE ? OR 
				spk_view.pekerjaan LIKE ? OR 
				spk_view.email LIKE ? OR 
				spk_view.sobat_id LIKE ? OR 
				spk_view.status_petugas LIKE ? OR 
				spk_view.keterangan_jabatan LIKE ? OR 
				spk_view.status_rincian_output LIKE ? OR 
				spk_view.bulan LIKE ? OR 
				spk_view.kode_bulan LIKE ? OR 
				spk_view.id_petugas LIKE ? OR 
				spk_view.id_rincian_output LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "spk_view/search.php";
		}
		$db->join("master_satuan", "spk_view.satuan = master_satuan.id", "LEFT");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("spk_view.id", ORDER_TYPE);
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		if(!empty($request->spk_view_bulan_tahun)){
			$val = $request->spk_view_bulan_tahun;
			$db->where("spk_view.bulan_tahun", $val , "=");
		}
		if(!empty($request->spk_view_nama_petugas)){
			$val = $request->spk_view_nama_petugas;
			$db->where("spk_view.nama_petugas", $val , "=");
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
		$page_title = $this->view->page_title = "Spk View";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("spk_view/rekap_honor.php", $data); //render the full page
	}
}
