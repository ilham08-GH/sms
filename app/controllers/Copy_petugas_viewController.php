<?php 
/**
 * Copy_petugas_view Page Controller
 * @category  Controller
 */
class Copy_petugas_viewController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "copy_petugas_view";
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
		$fields = array("id_rincian_output", 
			"id", 
			"id_petugas", 
			"status_bast", 
			"status_spk", 
			"volume_spk", 
			"volume_bast", 
			"harga_satuan", 
			"total", 
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
			"id_jabatan", 
			"jabatan", 
			"keterangan_jabatan", 
			"id_satuan", 
			"satuan", 
			"rincian_output", 
			"status_rincian_output", 
			"nama_survei", 
			"bulan", 
			"kode_bulan", 
			"bulan_tahun", 
			"id_nama_survei");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				copy_petugas_view.id_rincian_output LIKE ? OR 
				copy_petugas_view.id LIKE ? OR 
				copy_petugas_view.id_petugas LIKE ? OR 
				copy_petugas_view.status_bast LIKE ? OR 
				copy_petugas_view.status_spk LIKE ? OR 
				copy_petugas_view.volume_spk LIKE ? OR 
				copy_petugas_view.volume_bast LIKE ? OR 
				copy_petugas_view.harga_satuan LIKE ? OR 
				copy_petugas_view.total LIKE ? OR 
				copy_petugas_view.uraian_kegiatan LIKE ? OR 
				copy_petugas_view.tahun LIKE ? OR 
				copy_petugas_view.jangka_waktu LIKE ? OR 
				copy_petugas_view.harga_satuan_honor LIKE ? OR 
				copy_petugas_view.nik LIKE ? OR 
				copy_petugas_view.nama_petugas LIKE ? OR 
				copy_petugas_view.alamat LIKE ? OR 
				copy_petugas_view.kecamatan LIKE ? OR 
				copy_petugas_view.pekerjaan LIKE ? OR 
				copy_petugas_view.email LIKE ? OR 
				copy_petugas_view.sobat_id LIKE ? OR 
				copy_petugas_view.status_petugas LIKE ? OR 
				copy_petugas_view.id_jabatan LIKE ? OR 
				copy_petugas_view.jabatan LIKE ? OR 
				copy_petugas_view.keterangan_jabatan LIKE ? OR 
				copy_petugas_view.id_satuan LIKE ? OR 
				copy_petugas_view.satuan LIKE ? OR 
				copy_petugas_view.rincian_output LIKE ? OR 
				copy_petugas_view.status_rincian_output LIKE ? OR 
				copy_petugas_view.nama_survei LIKE ? OR 
				copy_petugas_view.bulan LIKE ? OR 
				copy_petugas_view.kode_bulan LIKE ? OR 
				copy_petugas_view.bulan_tahun LIKE ? OR 
				copy_petugas_view.id_nama_survei LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "copy_petugas_view/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("copy_petugas_view.id_rincian_output", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Copy Petugas View";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("copy_petugas_view/list.php", $data); //render the full page
	}
// No View Function Generated Because No Field is Defined as the Primary Key on the Database Table
}
