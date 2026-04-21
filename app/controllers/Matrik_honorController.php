<?php 
/**
 * Matrik_honor Page Controller
 * @category  Controller
 */
class Matrik_honorController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "matrik_honor";
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
		$fields = array("matrik_honor.id", 
			"master_tim.nama_tim AS master_tim_nama_tim", 
			"master_rincian_output.rincian_output AS master_rincian_output_rincian_output", 
			"matrik_honor.id_rincian_output", 
			"matrik_honor.uraian_kegiatan", 
			"matrik_honor.id_bulan_pelaksanaan", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"matrik_honor.tahun", 
			"matrik_honor.jangka_waktu", 
			"matrik_honor.harga_satuan_honor", 
			"matrik_honor.create_at", 
			"matrik_honor.status_pengajuan_honor", 
			"'➕ Tambah' AS tambahpetugas", 
			"'📝 List Petugas' AS petugaslist", 
			"'✏️ Ubah Status' AS ubah_status", 
			"(
  SELECT COUNT(*)
  FROM detail_matrik_honor d
  WHERE d.id_matrik_honor = matrik_honor.id
)
 AS jumlah_petugas", 
			"CASE
  -- 1️⃣ BELUM ADA DETAIL → BLANK
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_honor d0
    WHERE d0.id_matrik_honor = matrik_honor.id
  ) = 0
  THEN NULL
  -- 2️⃣ SEMUA DETAIL SUDAH ADA TGL_SP2D VALID → CLEAR
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_honor d
    WHERE d.id_matrik_honor = matrik_honor.id
      AND d.tgl_sp2d IS NOT NULL
      AND d.tgl_sp2d <> ''
      AND d.tgl_sp2d <> '0'
      AND d.tgl_sp2d <> '0000-00-00'
  ) = (
    SELECT COUNT(*)
    FROM detail_matrik_honor d2
    WHERE d2.id_matrik_honor = matrik_honor.id
  )
  THEN 'SP2D CLEAR'
  -- 3️⃣ SELAIN ITU → UNCLEAR
  ELSE 'SP2D UNCLEAR'
END
 AS status_sp2d");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				matrik_honor.id LIKE ? OR 
				matrik_honor.id_tim LIKE ? OR 
				master_tim.nama_tim LIKE ? OR 
				master_rincian_output.rincian_output LIKE ? OR 
				matrik_honor.id_rincian_output LIKE ? OR 
				matrik_honor.id_nama_survei LIKE ? OR 
				matrik_honor.uraian_kegiatan LIKE ? OR 
				matrik_honor.id_bulan_pelaksanaan LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				matrik_honor.tahun LIKE ? OR 
				matrik_honor.jangka_waktu LIKE ? OR 
				matrik_honor.cek_double LIKE ? OR 
				matrik_honor.no_surat_spk LIKE ? OR 
				matrik_honor.no_surat_bast LIKE ? OR 
				matrik_honor.create_by LIKE ? OR 
				matrik_honor.create_at LIKE ? OR 
				matrik_honor.status_pengajuan_honor LIKE ? OR 
				master_rincian_output.id LIKE ? OR 
				master_rincian_output.status_rincian_output LIKE ? OR 
				master_survei.id LIKE ? OR 
				master_survei.nama_survei LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.kode_bulan LIKE ? OR 
				master_tim.id LIKE ? OR 
				master_tim.status_tim LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "matrik_honor/search.php";
		}
		$db->join("master_rincian_output", "matrik_honor.id_rincian_output = master_rincian_output.id", "INNER");
		$db->join("master_survei", "matrik_honor.id_nama_survei = master_survei.id", "INNER");
		$db->join("master_bulan", "matrik_honor.id_bulan_pelaksanaan = master_bulan.id", "INNER");
		$db->join("master_tim", "matrik_honor.id_tim = master_tim.id", "LEFT");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("matrik_honor.id", ORDER_TYPE);
		}
		$db->where("create_by='". USER_ID . "'");
		$db->having("status_sp2d = 'SP2D UNCLEAR' OR status_sp2d IS NULL OR status_sp2d = ''");
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
				$record['create_at'] = format_date($record['create_at'],'d M Y');
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
		$page_title = $this->view->page_title = "Matrik Honor";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("matrik_honor/list.php", $data); //render the full page
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
		$fields = array("matrik_honor.id", 
			"matrik_honor.id_tim", 
			"matrik_honor.id_rincian_output", 
			"matrik_honor.id_nama_survei", 
			"matrik_honor.uraian_kegiatan", 
			"matrik_honor.id_bulan_pelaksanaan", 
			"matrik_honor.tahun", 
			"matrik_honor.jangka_waktu", 
			"matrik_honor.cek_double", 
			"matrik_honor.no_surat_spk", 
			"matrik_honor.no_surat_bast", 
			"matrik_honor.create_by", 
			"matrik_honor.create_at", 
			"matrik_honor.harga_satuan_honor", 
			"master_rincian_output.id AS master_rincian_output_id", 
			"master_rincian_output.rincian_output AS master_rincian_output_rincian_output", 
			"master_rincian_output.status_rincian_output AS master_rincian_output_status_rincian_output", 
			"master_survei.id AS master_survei_id", 
			"master_survei.nama_survei AS master_survei_nama_survei", 
			"master_bulan.id AS master_bulan_id", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"master_bulan.kode_bulan AS master_bulan_kode_bulan", 
			"master_tim.id AS master_tim_id", 
			"master_tim.nama_tim AS master_tim_nama_tim", 
			"master_tim.status_tim AS master_tim_status_tim", 
			"matrik_honor.status_pengajuan_honor");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("matrik_honor.id", $rec_id);; //select record based on primary key
		}
		$db->join("master_rincian_output", "matrik_honor.id_rincian_output = master_rincian_output.id", "INNER ");
		$db->join("master_survei", "matrik_honor.id_nama_survei = master_survei.id", "INNER ");
		$db->join("master_bulan", "matrik_honor.id_bulan_pelaksanaan = master_bulan.id", "INNER ");
		$db->join("master_tim", "matrik_honor.id_tim = master_tim.id", "LEFT ");  
		$record = $db->getOne($tablename, $fields );
		if($record){
			$record['create_at'] = format_date($record['create_at'],'d M Y');
			$page_title = $this->view->page_title = "View  Matrik Honor";
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
		return $this->render_view("matrik_honor/view.php", $record);
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
			$fields = $this->fields = array("id_tim","id_rincian_output","id_nama_survei","uraian_kegiatan","id_bulan_pelaksanaan","tahun","jangka_waktu","harga_satuan_honor","create_by","create_at");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'id_tim' => 'required',
				'id_rincian_output' => 'required',
				'id_nama_survei' => 'required',
				'uraian_kegiatan' => 'required',
				'id_bulan_pelaksanaan' => 'required',
				'tahun' => 'required',
				'jangka_waktu' => 'required',
				'harga_satuan_honor' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'id_tim' => 'sanitize_string',
				'id_rincian_output' => 'sanitize_string',
				'id_nama_survei' => 'sanitize_string',
				'uraian_kegiatan' => 'sanitize_string',
				'id_bulan_pelaksanaan' => 'sanitize_string',
				'tahun' => 'sanitize_string',
				'jangka_waktu' => 'sanitize_string',
				'harga_satuan_honor' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['create_by'] = USER_ID;
$modeldata['create_at'] = datetime_now();
			if($this->validated()){
		# Statement to execute before adding record
		// Buat nilai cek_double
$cek_double = $modeldata['id_nama_survei'] . $modeldata['id_bulan_pelaksanaan'] . $modeldata['tahun'];
// Cek duplikat
$exist = $db->rawQueryOne(
    "SELECT id FROM matrik_honor WHERE cek_double = ?",
    array($cek_double)
);
if($exist){
    // Tampilkan pesan
    $this->set_flash_msg("Data sudah ada! Kombinasi Survei / Bulan / Tahun tidak boleh duplikat.", "danger");
    // Redirect kembali ke halaman form add tanpa crash
    $this->redirect("matrik_honor");
    return false;
}
// Lanjut insert
$modeldata['cek_double'] = $cek_double;
		# End of before add statement
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Data berhasil disimpan", "success");
					return	$this->redirect("matrik_honor");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Buat Matrik Honor";
		$this->render_view("matrik_honor/add.php");
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
		$fields = $this->fields = array("id","id_tim","id_rincian_output","id_nama_survei","uraian_kegiatan","id_bulan_pelaksanaan","tahun","jangka_waktu","harga_satuan_honor","create_by","create_at","status_pengajuan_honor");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'id_tim' => 'required',
				'id_rincian_output' => 'required',
				'id_nama_survei' => 'required',
				'uraian_kegiatan' => 'required',
				'id_bulan_pelaksanaan' => 'required',
				'tahun' => 'required',
				'jangka_waktu' => 'required',
				'harga_satuan_honor' => 'required|numeric',
				'status_pengajuan_honor' => 'required',
			);
			$this->sanitize_array = array(
				'id_tim' => 'sanitize_string',
				'id_rincian_output' => 'sanitize_string',
				'id_nama_survei' => 'sanitize_string',
				'uraian_kegiatan' => 'sanitize_string',
				'id_bulan_pelaksanaan' => 'sanitize_string',
				'tahun' => 'sanitize_string',
				'jangka_waktu' => 'sanitize_string',
				'harga_satuan_honor' => 'sanitize_string',
				'status_pengajuan_honor' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['create_by'] = USER_ID;
$modeldata['create_at'] = datetime_now();
			if($this->validated()){
				$db->where("matrik_honor.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("matrik_honor");
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
						return	$this->redirect("matrik_honor");
					}
				}
			}
		}
		$db->where("matrik_honor.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Matrik Honor";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("matrik_honor/edit.php", $data);
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
		$fields = $this->fields = array("id","id_tim","id_rincian_output","id_nama_survei","uraian_kegiatan","id_bulan_pelaksanaan","tahun","jangka_waktu","harga_satuan_honor","create_by","create_at","status_pengajuan_honor");
		$page_error = null;
		if($formdata){
			$postdata = array();
			$fieldname = $formdata['name'];
			$fieldvalue = $formdata['value'];
			$postdata[$fieldname] = $fieldvalue;
			$postdata = $this->format_request_data($postdata);
			$this->rules_array = array(
				'id_tim' => 'required',
				'id_rincian_output' => 'required',
				'id_nama_survei' => 'required',
				'uraian_kegiatan' => 'required',
				'id_bulan_pelaksanaan' => 'required',
				'tahun' => 'required',
				'jangka_waktu' => 'required',
				'harga_satuan_honor' => 'required|numeric',
				'status_pengajuan_honor' => 'required',
			);
			$this->sanitize_array = array(
				'id_tim' => 'sanitize_string',
				'id_rincian_output' => 'sanitize_string',
				'id_nama_survei' => 'sanitize_string',
				'uraian_kegiatan' => 'sanitize_string',
				'id_bulan_pelaksanaan' => 'sanitize_string',
				'tahun' => 'sanitize_string',
				'jangka_waktu' => 'sanitize_string',
				'harga_satuan_honor' => 'sanitize_string',
				'status_pengajuan_honor' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the formdata
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("matrik_honor.id", $rec_id);;
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
	#Statement to execute before delete record
	$db->rawQuery(
            "DELETE FROM detail_matrik_honor WHERE id_matrik_honor = ?",
            [$rec_id]
        );
	# End of before delete statement
		$db->where("matrik_honor.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Data berhasil dihapus", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("matrik_honor");
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
		$fields = array("matrik_honor.id", 
			"master_tim.nama_tim AS master_tim_nama_tim", 
			"master_rincian_output.rincian_output AS master_rincian_output_rincian_output", 
			"matrik_honor.id_rincian_output", 
			"matrik_honor.uraian_kegiatan", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"matrik_honor.tahun", 
			"matrik_honor.jangka_waktu", 
			"matrik_honor.harga_satuan_honor", 
			"matrik_honor.create_at", 
			"matrik_honor.status_pengajuan_honor", 
			"(
  SELECT COUNT(*)
  FROM detail_matrik_honor d
  WHERE d.id_matrik_honor = matrik_honor.id
)
 AS jumlah_petugas", 
			"CASE
  -- 1️⃣ BELUM ADA DETAIL → BLANK
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_honor d0
    WHERE d0.id_matrik_honor = matrik_honor.id
  ) = 0
  THEN NULL
  -- 2️⃣ SEMUA DETAIL SUDAH ADA TGL_SP2D VALID → CLEAR
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_honor d
    WHERE d.id_matrik_honor = matrik_honor.id
      AND d.tgl_sp2d IS NOT NULL
      AND d.tgl_sp2d <> ''
      AND d.tgl_sp2d <> '0'
      AND d.tgl_sp2d <> '0000-00-00'
  ) = (
    SELECT COUNT(*)
    FROM detail_matrik_honor d2
    WHERE d2.id_matrik_honor = matrik_honor.id
  )
  THEN 'SP2D CLEAR'
  -- 3️⃣ SELAIN ITU → UNCLEAR
  ELSE 'SP2D UNCLEAR'
END
 AS status_sp2d", 
			"'📝 List Petugas' AS petugaslist");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				matrik_honor.id LIKE ? OR 
				matrik_honor.id_tim LIKE ? OR 
				master_tim.nama_tim LIKE ? OR 
				master_rincian_output.rincian_output LIKE ? OR 
				matrik_honor.id_rincian_output LIKE ? OR 
				matrik_honor.id_nama_survei LIKE ? OR 
				matrik_honor.uraian_kegiatan LIKE ? OR 
				matrik_honor.id_bulan_pelaksanaan LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				matrik_honor.tahun LIKE ? OR 
				matrik_honor.jangka_waktu LIKE ? OR 
				matrik_honor.cek_double LIKE ? OR 
				matrik_honor.no_surat_spk LIKE ? OR 
				matrik_honor.no_surat_bast LIKE ? OR 
				matrik_honor.create_by LIKE ? OR 
				matrik_honor.create_at LIKE ? OR 
				master_rincian_output.id LIKE ? OR 
				master_rincian_output.status_rincian_output LIKE ? OR 
				master_survei.id LIKE ? OR 
				master_survei.nama_survei LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.kode_bulan LIKE ? OR 
				master_tim.id LIKE ? OR 
				master_tim.status_tim LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "matrik_honor/search.php";
		}
		$db->join("master_rincian_output", "matrik_honor.id_rincian_output = master_rincian_output.id", "INNER");
		$db->join("master_survei", "matrik_honor.id_nama_survei = master_survei.id", "INNER");
		$db->join("master_bulan", "matrik_honor.id_bulan_pelaksanaan = master_bulan.id", "INNER");
		$db->join("master_tim", "matrik_honor.id_tim = master_tim.id", "LEFT");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("matrik_honor.id", ORDER_TYPE);
		}
		$db->having("status_sp2d = 'SP2D UNCLEAR'");
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		if(!empty($request->master_bulan_bulan)){
			$val = $request->master_bulan_bulan;
			$db->where("master_bulan.bulan", $val , "=");
		}
		if(!empty($request->matrik_honor_tahun)){
			$val = $request->matrik_honor_tahun;
			$db->where("matrik_honor.tahun", $val , "=");
		}
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $pagination, $fields);
		$records_count = count($records);
		$total_records = intval($tc->totalCount);
		$page_limit = $pagination[1];
		$total_pages = ceil($total_records / $page_limit);
		if(	!empty($records)){
			foreach($records as &$record){
				$record['create_at'] = format_date($record['create_at'],'d M Y');
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
		$page_title = $this->view->page_title = "Matrik Honor";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("matrik_honor/list_tu.php", $data); //render the full page
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function list_admin($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("matrik_honor.id", 
			"master_tim.nama_tim AS master_tim_nama_tim", 
			"master_rincian_output.rincian_output AS master_rincian_output_rincian_output", 
			"matrik_honor.id_rincian_output", 
			"matrik_honor.uraian_kegiatan", 
			"matrik_honor.id_bulan_pelaksanaan", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"matrik_honor.tahun", 
			"matrik_honor.jangka_waktu", 
			"matrik_honor.harga_satuan_honor", 
			"matrik_honor.create_at", 
			"matrik_honor.status_pengajuan_honor", 
			"'➕ Tambah' AS tambahpetugas", 
			"'📝 List Petugas' AS petugaslist", 
			"(
  SELECT COUNT(*)
  FROM detail_matrik_honor d
  WHERE d.id_matrik_honor = matrik_honor.id
)
 AS jumlah_petugas", 
			"CASE
  -- 1️⃣ BELUM ADA DETAIL → BLANK
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_honor d0
    WHERE d0.id_matrik_honor = matrik_honor.id
  ) = 0
  THEN NULL
  -- 2️⃣ SEMUA DETAIL SUDAH ADA TGL_SP2D VALID → CLEAR
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_honor d
    WHERE d.id_matrik_honor = matrik_honor.id
      AND d.tgl_sp2d IS NOT NULL
      AND d.tgl_sp2d <> ''
      AND d.tgl_sp2d <> '0'
      AND d.tgl_sp2d <> '0000-00-00'
  ) = (
    SELECT COUNT(*)
    FROM detail_matrik_honor d2
    WHERE d2.id_matrik_honor = matrik_honor.id
  )
  THEN 'SP2D CLEAR'
  -- 3️⃣ SELAIN ITU → UNCLEAR
  ELSE 'SP2D UNCLEAR'
END
 AS status_sp2d");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				matrik_honor.id LIKE ? OR 
				matrik_honor.id_tim LIKE ? OR 
				master_tim.nama_tim LIKE ? OR 
				master_rincian_output.rincian_output LIKE ? OR 
				matrik_honor.id_rincian_output LIKE ? OR 
				matrik_honor.id_nama_survei LIKE ? OR 
				matrik_honor.uraian_kegiatan LIKE ? OR 
				matrik_honor.id_bulan_pelaksanaan LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				matrik_honor.tahun LIKE ? OR 
				matrik_honor.jangka_waktu LIKE ? OR 
				matrik_honor.cek_double LIKE ? OR 
				matrik_honor.no_surat_spk LIKE ? OR 
				matrik_honor.no_surat_bast LIKE ? OR 
				matrik_honor.create_by LIKE ? OR 
				matrik_honor.create_at LIKE ? OR 
				matrik_honor.status_pengajuan_honor LIKE ? OR 
				master_rincian_output.id LIKE ? OR 
				master_rincian_output.status_rincian_output LIKE ? OR 
				master_survei.id LIKE ? OR 
				master_survei.nama_survei LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.kode_bulan LIKE ? OR 
				master_tim.id LIKE ? OR 
				master_tim.status_tim LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "matrik_honor/search.php";
		}
		$db->join("master_rincian_output", "matrik_honor.id_rincian_output = master_rincian_output.id", "INNER");
		$db->join("master_survei", "matrik_honor.id_nama_survei = master_survei.id", "INNER");
		$db->join("master_bulan", "matrik_honor.id_bulan_pelaksanaan = master_bulan.id", "INNER");
		$db->join("master_tim", "matrik_honor.id_tim = master_tim.id", "LEFT");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("matrik_honor.id", ORDER_TYPE);
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
		if(	!empty($records)){
			foreach($records as &$record){
				$record['create_at'] = format_date($record['create_at'],'d M Y');
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
		$page_title = $this->view->page_title = "Matrik Honor";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("matrik_honor/list_admin.php", $data); //render the full page
	}
	/**
     * Update table record with formdata
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function edit_status($rec_id = null, $formdata = null){
		$request = $this->request;
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		 //editable fields
		$fields = $this->fields = array("id","status_pengajuan_honor");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'status_pengajuan_honor' => 'required',
			);
			$this->sanitize_array = array(
				'status_pengajuan_honor' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("matrik_honor.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("📢 Data berhasil diupdate", "success");
					return $this->redirect("matrik_honor");
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
						return	$this->redirect("matrik_honor");
					}
				}
			}
		}
		$db->where("matrik_honor.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Matrik Honor";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("matrik_honor/edit_status.php", $data);
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
		$fields = array("matrik_honor.id", 
			"master_tim.nama_tim AS master_tim_nama_tim", 
			"master_rincian_output.rincian_output AS master_rincian_output_rincian_output", 
			"matrik_honor.id_rincian_output", 
			"matrik_honor.uraian_kegiatan", 
			"matrik_honor.id_bulan_pelaksanaan", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"matrik_honor.tahun", 
			"matrik_honor.jangka_waktu", 
			"matrik_honor.harga_satuan_honor", 
			"matrik_honor.create_at", 
			"matrik_honor.status_pengajuan_honor", 
			"'📝 List Petugas' AS petugaslist", 
			"(
  SELECT COUNT(*)
  FROM detail_matrik_honor d
  WHERE d.id_matrik_honor = matrik_honor.id
)
 AS jumlah_petugas", 
			"CASE
  -- 1️⃣ BELUM ADA DETAIL → BLANK
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_honor d0
    WHERE d0.id_matrik_honor = matrik_honor.id
  ) = 0
  THEN NULL
  -- 2️⃣ SEMUA DETAIL SUDAH ADA TGL_SP2D VALID → CLEAR
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_honor d
    WHERE d.id_matrik_honor = matrik_honor.id
      AND d.tgl_sp2d IS NOT NULL
      AND d.tgl_sp2d <> ''
      AND d.tgl_sp2d <> '0'
      AND d.tgl_sp2d <> '0000-00-00'
  ) = (
    SELECT COUNT(*)
    FROM detail_matrik_honor d2
    WHERE d2.id_matrik_honor = matrik_honor.id
  )
  THEN 'SP2D CLEAR'
  -- 3️⃣ SELAIN ITU → UNCLEAR
  ELSE 'SP2D UNCLEAR'
END
 AS status_sp2d");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				matrik_honor.id LIKE ? OR 
				matrik_honor.id_tim LIKE ? OR 
				master_tim.nama_tim LIKE ? OR 
				master_rincian_output.rincian_output LIKE ? OR 
				matrik_honor.id_rincian_output LIKE ? OR 
				matrik_honor.id_nama_survei LIKE ? OR 
				matrik_honor.uraian_kegiatan LIKE ? OR 
				matrik_honor.id_bulan_pelaksanaan LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				matrik_honor.tahun LIKE ? OR 
				matrik_honor.jangka_waktu LIKE ? OR 
				matrik_honor.cek_double LIKE ? OR 
				matrik_honor.no_surat_spk LIKE ? OR 
				matrik_honor.no_surat_bast LIKE ? OR 
				matrik_honor.create_by LIKE ? OR 
				matrik_honor.create_at LIKE ? OR 
				matrik_honor.status_pengajuan_honor LIKE ? OR 
				master_rincian_output.id LIKE ? OR 
				master_rincian_output.status_rincian_output LIKE ? OR 
				master_survei.id LIKE ? OR 
				master_survei.nama_survei LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.kode_bulan LIKE ? OR 
				master_tim.id LIKE ? OR 
				master_tim.status_tim LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "matrik_honor/search.php";
		}
		$db->join("master_rincian_output", "matrik_honor.id_rincian_output = master_rincian_output.id", "INNER");
		$db->join("master_survei", "matrik_honor.id_nama_survei = master_survei.id", "INNER");
		$db->join("master_bulan", "matrik_honor.id_bulan_pelaksanaan = master_bulan.id", "INNER");
		$db->join("master_tim", "matrik_honor.id_tim = master_tim.id", "LEFT");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("matrik_honor.id", ORDER_TYPE);
		}
		$db->where("create_by='". USER_ID . "'");
		$db->having("status_sp2d='SP2D CLEAR'");
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
				$record['create_at'] = format_date($record['create_at'],'d M Y');
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
		$page_title = $this->view->page_title = "Matrik Honor";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("matrik_honor/list_sp2d_clear.php", $data); //render the full page
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function list_tu_sp2d_clear($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("matrik_honor.id", 
			"master_tim.nama_tim AS master_tim_nama_tim", 
			"master_rincian_output.rincian_output AS master_rincian_output_rincian_output", 
			"matrik_honor.id_rincian_output", 
			"matrik_honor.uraian_kegiatan", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"matrik_honor.tahun", 
			"matrik_honor.jangka_waktu", 
			"matrik_honor.harga_satuan_honor", 
			"matrik_honor.create_at", 
			"matrik_honor.status_pengajuan_honor", 
			"(
  SELECT COUNT(*)
  FROM detail_matrik_honor d
  WHERE d.id_matrik_honor = matrik_honor.id
)
 AS jumlah_petugas", 
			"CASE
  -- 1️⃣ BELUM ADA DETAIL → BLANK
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_honor d0
    WHERE d0.id_matrik_honor = matrik_honor.id
  ) = 0
  THEN NULL
  -- 2️⃣ SEMUA DETAIL SUDAH ADA TGL_SP2D VALID → CLEAR
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_honor d
    WHERE d.id_matrik_honor = matrik_honor.id
      AND d.tgl_sp2d IS NOT NULL
      AND d.tgl_sp2d <> ''
      AND d.tgl_sp2d <> '0'
      AND d.tgl_sp2d <> '0000-00-00'
  ) = (
    SELECT COUNT(*)
    FROM detail_matrik_honor d2
    WHERE d2.id_matrik_honor = matrik_honor.id
  )
  THEN 'SP2D CLEAR'
  -- 3️⃣ SELAIN ITU → UNCLEAR
  ELSE 'SP2D UNCLEAR'
END
 AS status_sp2d", 
			"'📝 List Petugas' AS petugaslist");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				matrik_honor.id LIKE ? OR 
				matrik_honor.id_tim LIKE ? OR 
				master_tim.nama_tim LIKE ? OR 
				master_rincian_output.rincian_output LIKE ? OR 
				matrik_honor.id_rincian_output LIKE ? OR 
				matrik_honor.id_nama_survei LIKE ? OR 
				matrik_honor.uraian_kegiatan LIKE ? OR 
				matrik_honor.id_bulan_pelaksanaan LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				matrik_honor.tahun LIKE ? OR 
				matrik_honor.jangka_waktu LIKE ? OR 
				matrik_honor.cek_double LIKE ? OR 
				matrik_honor.no_surat_spk LIKE ? OR 
				matrik_honor.no_surat_bast LIKE ? OR 
				matrik_honor.create_by LIKE ? OR 
				matrik_honor.create_at LIKE ? OR 
				master_rincian_output.id LIKE ? OR 
				master_rincian_output.status_rincian_output LIKE ? OR 
				master_survei.id LIKE ? OR 
				master_survei.nama_survei LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.kode_bulan LIKE ? OR 
				master_tim.id LIKE ? OR 
				master_tim.status_tim LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "matrik_honor/search.php";
		}
		$db->join("master_rincian_output", "matrik_honor.id_rincian_output = master_rincian_output.id", "INNER");
		$db->join("master_survei", "matrik_honor.id_nama_survei = master_survei.id", "INNER");
		$db->join("master_bulan", "matrik_honor.id_bulan_pelaksanaan = master_bulan.id", "INNER");
		$db->join("master_tim", "matrik_honor.id_tim = master_tim.id", "LEFT");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("matrik_honor.id", ORDER_TYPE);
		}
		$db->having("status_sp2d = 'SP2D CLEAR'");
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		if(!empty($request->master_bulan_bulan)){
			$val = $request->master_bulan_bulan;
			$db->where("master_bulan.bulan", $val , "=");
		}
		if(!empty($request->matrik_honor_tahun)){
			$val = $request->matrik_honor_tahun;
			$db->where("matrik_honor.tahun", $val , "=");
		}
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $pagination, $fields);
		$records_count = count($records);
		$total_records = intval($tc->totalCount);
		$page_limit = $pagination[1];
		$total_pages = ceil($total_records / $page_limit);
		if(	!empty($records)){
			foreach($records as &$record){
				$record['create_at'] = format_date($record['create_at'],'d M Y');
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
		$page_title = $this->view->page_title = "Matrik Honor";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("matrik_honor/list_tu_sp2d_clear.php", $data); //render the full page
	}
}
