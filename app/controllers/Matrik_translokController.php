<?php 
/**
 * Matrik_translok Page Controller
 * @category  Controller
 */
class Matrik_translokController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "matrik_translok";
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
		$fields = array("matrik_translok.id", 
			"master_tim.nama_tim AS master_tim_nama_tim", 
			"matrik_translok.id_bulan_pengajuan", 
			"master_survei.nama_survei AS master_survei_nama_survei", 
			"matrik_translok.uraian_pengajuan", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"matrik_translok.tahun", 
			"matrik_translok.create_at", 
			"matrik_translok.harga_satuan_honor", 
			"matrik_translok.status_pengajuan_translok", 
			"'➕ Tambah' AS tambahpegawai", 
			"'📝 List Petugas' AS list_petugas", 
			"'✏️ Ubah Status' AS ubah_status", 
			"(
  SELECT COUNT(*)
  FROM detail_matrik_translok d
  WHERE d.id_matrik_translok = matrik_translok.id
)
 AS jumlah_petugas", 
			"CASE
  -- 1️⃣ BELUM ADA DETAIL → BLANK
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_translok d0
    WHERE d0.id_matrik_translok = matrik_translok.id
  ) = 0
  THEN NULL
  -- 2️⃣ SEMUA DETAIL SUDAH ADA TGL_SP2D VALID → CLEAR
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_translok d
    WHERE d.id_matrik_translok = matrik_translok.id
      AND d.tgl_sp2d IS NOT NULL
      AND d.tgl_sp2d <> ''
      AND d.tgl_sp2d <> '0'
      AND d.tgl_sp2d <> '0000-00-00'
  ) = (
    SELECT COUNT(*)
    FROM detail_matrik_translok d2
    WHERE d2.id_matrik_translok = matrik_translok.id
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
				matrik_translok.id LIKE ? OR 
				matrik_translok.id_tim LIKE ? OR 
				master_tim.nama_tim LIKE ? OR 
				matrik_translok.id_nama_survei LIKE ? OR 
				matrik_translok.id_bulan_pengajuan LIKE ? OR 
				master_survei.nama_survei LIKE ? OR 
				matrik_translok.uraian_pengajuan LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				matrik_translok.tahun LIKE ? OR 
				matrik_translok.cek_double LIKE ? OR 
				matrik_translok.create_by LIKE ? OR 
				matrik_translok.create_at LIKE ? OR 
				matrik_translok.harga_satuan_honor LIKE ? OR 
				master_tim.id LIKE ? OR 
				master_tim.status_tim LIKE ? OR 
				master_survei.id LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.kode_bulan LIKE ? OR 
				matrik_translok.status_pengajuan_translok LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "matrik_translok/search.php";
		}
		$db->join("master_tim", "matrik_translok.id_tim = master_tim.id", "LEFT");
		$db->join("master_survei", "matrik_translok.id_nama_survei = master_survei.id", "INNER");
		$db->join("master_bulan", "matrik_translok.id_bulan_pengajuan = master_bulan.id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("matrik_translok.id", ORDER_TYPE);
		}
		$db->where("create_by='". USER_ID . "'");
		$db->having("status_sp2d='SP2D UNCLEAR'" or  "status_sp2d=''");
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
		$page_title = $this->view->page_title = "Matrik Translok";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("matrik_translok/list.php", $data); //render the full page
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
		$fields = array("matrik_translok.id", 
			"matrik_translok.id_tim", 
			"matrik_translok.id_nama_survei", 
			"matrik_translok.id_bulan_pengajuan", 
			"matrik_translok.tahun", 
			"matrik_translok.cek_double", 
			"matrik_translok.create_by", 
			"matrik_translok.create_at", 
			"matrik_translok.harga_satuan_honor", 
			"matrik_translok.uraian_pengajuan", 
			"master_tim.id AS master_tim_id", 
			"master_tim.nama_tim AS master_tim_nama_tim", 
			"master_tim.status_tim AS master_tim_status_tim", 
			"master_survei.id AS master_survei_id", 
			"master_survei.nama_survei AS master_survei_nama_survei", 
			"master_bulan.id AS master_bulan_id", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"master_bulan.kode_bulan AS master_bulan_kode_bulan", 
			"matrik_translok.status_pengajuan_translok");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("matrik_translok.id", $rec_id);; //select record based on primary key
		}
		$db->join("master_tim", "matrik_translok.id_tim = master_tim.id", "LEFT ");
		$db->join("master_survei", "matrik_translok.id_nama_survei = master_survei.id", "INNER ");
		$db->join("master_bulan", "matrik_translok.id_bulan_pengajuan = master_bulan.id", "INNER ");  
		$record = $db->getOne($tablename, $fields );
		if($record){
			$record['create_at'] = format_date($record['create_at'],'d M Y');
			$page_title = $this->view->page_title = "View Matrik Translok";
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
		return $this->render_view("matrik_translok/view.php", $record);
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
			$fields = $this->fields = array("id_tim","id_bulan_pengajuan","tahun","id_nama_survei","uraian_pengajuan","create_by","create_at","harga_satuan_honor");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'id_tim' => 'required',
				'id_bulan_pengajuan' => 'required',
				'tahun' => 'required',
				'id_nama_survei' => 'required',
				'uraian_pengajuan' => 'required',
				'create_at' => 'required',
				'harga_satuan_honor' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'id_tim' => 'sanitize_string',
				'id_bulan_pengajuan' => 'sanitize_string',
				'tahun' => 'sanitize_string',
				'id_nama_survei' => 'sanitize_string',
				'uraian_pengajuan' => 'sanitize_string',
				'create_at' => 'sanitize_string',
				'harga_satuan_honor' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['create_by'] = USER_ID;
			if($this->validated()){
		# Statement to execute before adding record
		// Buat nilai cek_double sementara dimatikan dulu sampai baris 251
        $cek_double = $modeldata['id_nama_survei'] . $modeldata['id_bulan_pengajuan'] . $modeldata['tahun'];
        // Cek duplikat
        $exist = $db->rawQueryOne(
            "SELECT id FROM matrik_translok WHERE cek_double = ?",
            array($cek_double)
        );
        
        // Buat nilai cek_double sementara dimatikan dulu sampai baris 253
        //if($exist){
    // Tampilkan pesan
    //$this->set_flash_msg("Data sudah ada! Kombinasi Survei / Bulan / Tahun tidak boleh duplikat.", "danger");
    // Redirect kembali ke halaman form add tanpa crash
    //$this->redirect("matrik_translok");
    //return false;
    //}
// Lanjut insert
$modeldata['cek_double'] = $cek_double;
		# End of before add statement
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("📢 Sukses, Data berhasil disimpan", "success");
					return	$this->redirect("matrik_translok");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Buat Matrik Translok";
		$this->render_view("matrik_translok/add.php");
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
		$fields = $this->fields = array("id","id_tim","id_bulan_pengajuan","tahun","id_nama_survei","uraian_pengajuan","create_by","create_at","harga_satuan_honor");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'id_tim' => 'required',
				'id_bulan_pengajuan' => 'required',
				'tahun' => 'required',
				'id_nama_survei' => 'required',
				'uraian_pengajuan' => 'required',
				'create_at' => 'required',
				'harga_satuan_honor' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'id_tim' => 'sanitize_string',
				'id_bulan_pengajuan' => 'sanitize_string',
				'tahun' => 'sanitize_string',
				'id_nama_survei' => 'sanitize_string',
				'uraian_pengajuan' => 'sanitize_string',
				'create_at' => 'sanitize_string',
				'harga_satuan_honor' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['create_by'] = USER_ID;
			if($this->validated()){
				$db->where("matrik_translok.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("📢 Data berhasil diupdate", "success");
					return $this->redirect("matrik_translok");
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
						return	$this->redirect("matrik_translok");
					}
				}
			}
		}
		$db->where("matrik_translok.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Matrik Translok";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("matrik_translok/edit.php", $data);
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
            "DELETE FROM detail_matrik_translok WHERE id_matrik_translok = ?",
            [$rec_id]
        );
	# End of before delete statement
		$db->where("matrik_translok.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("🗑 Data berhasil dihapus", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("matrik_translok");
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
		$fields = array("matrik_translok.id", 
			"master_tim.nama_tim AS master_tim_nama_tim", 
			"master_survei.nama_survei AS master_survei_nama_survei", 
			"matrik_translok.uraian_pengajuan", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"matrik_translok.tahun", 
			"matrik_translok.create_at", 
			"matrik_translok.harga_satuan_honor", 
			"matrik_translok.status_pengajuan_translok", 
			"(
  SELECT COUNT(*)
  FROM detail_matrik_translok d
  WHERE d.id_matrik_translok = matrik_translok.id
)
 AS jumlah_petugas", 
			"CASE
  -- 1️⃣ BELUM ADA DETAIL → BLANK
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_translok d0
    WHERE d0.id_matrik_translok = matrik_translok.id
  ) = 0
  THEN NULL
  -- 2️⃣ SEMUA DETAIL SUDAH ADA TGL_SP2D VALID → CLEAR
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_translok d
    WHERE d.id_matrik_translok = matrik_translok.id
      AND d.tgl_sp2d IS NOT NULL
      AND d.tgl_sp2d <> ''
      AND d.tgl_sp2d <> '0'
      AND d.tgl_sp2d <> '0000-00-00'
  ) = (
    SELECT COUNT(*)
    FROM detail_matrik_translok d2
    WHERE d2.id_matrik_translok = matrik_translok.id
  )
  THEN 'SP2D CLEAR'
  -- 3️⃣ SELAIN ITU → UNCLEAR
  ELSE 'SP2D UNCLEAR'
END
 AS status_sp2d", 
			"'📝 List Petugas' AS list_petugas");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				matrik_translok.id LIKE ? OR 
				matrik_translok.id_tim LIKE ? OR 
				master_tim.nama_tim LIKE ? OR 
				matrik_translok.id_nama_survei LIKE ? OR 
				matrik_translok.id_bulan_pengajuan LIKE ? OR 
				master_survei.nama_survei LIKE ? OR 
				matrik_translok.uraian_pengajuan LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				matrik_translok.tahun LIKE ? OR 
				matrik_translok.cek_double LIKE ? OR 
				matrik_translok.create_by LIKE ? OR 
				matrik_translok.create_at LIKE ? OR 
				matrik_translok.harga_satuan_honor LIKE ? OR 
				master_tim.id LIKE ? OR 
				master_tim.status_tim LIKE ? OR 
				master_survei.id LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.kode_bulan LIKE ? OR 
				matrik_translok.status_pengajuan_translok LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "matrik_translok/search.php";
		}
		$db->join("master_tim", "matrik_translok.id_tim = master_tim.id", "LEFT");
		$db->join("master_survei", "matrik_translok.id_nama_survei = master_survei.id", "INNER");
		$db->join("master_bulan", "matrik_translok.id_bulan_pengajuan = master_bulan.id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("matrik_translok.id", ORDER_TYPE);
		}
		$db->having("status_sp2d = 'SP2D UNCLEAR'");
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		if(!empty($request->master_bulan_bulan)){
			$val = $request->master_bulan_bulan;
			$db->where("master_bulan.bulan", $val , "=");
		}
		if(!empty($request->matrik_translok_tahun)){
			$val = $request->matrik_translok_tahun;
			$db->where("matrik_translok.tahun", $val , "=");
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
		$page_title = $this->view->page_title = "Matrik Translok";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("matrik_translok/list_tu.php", $data); //render the full page
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
		$fields = array("matrik_translok.id", 
			"master_tim.nama_tim AS master_tim_nama_tim", 
			"matrik_translok.id_bulan_pengajuan", 
			"master_survei.nama_survei AS master_survei_nama_survei", 
			"matrik_translok.uraian_pengajuan", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"matrik_translok.tahun", 
			"matrik_translok.create_at", 
			"matrik_translok.harga_satuan_honor", 
			"'➕ Tambah' AS tambahpegawai", 
			"matrik_translok.status_pengajuan_translok", 
			"(
  SELECT COUNT(*)
  FROM detail_matrik_translok d
  WHERE d.id_matrik_translok = matrik_translok.id
)
 AS jumlah_petugas", 
			"'📝 List Petugas' AS list_petugas", 
			"CASE
  -- 1️⃣ BELUM ADA DETAIL → BLANK
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_translok d0
    WHERE d0.id_matrik_translok = matrik_translok.id
  ) = 0
  THEN NULL
  -- 2️⃣ SEMUA DETAIL SUDAH ADA TGL_SP2D VALID → CLEAR
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_translok d
    WHERE d.id_matrik_translok = matrik_translok.id
      AND d.tgl_sp2d IS NOT NULL
      AND d.tgl_sp2d <> ''
      AND d.tgl_sp2d <> '0'
      AND d.tgl_sp2d <> '0000-00-00'
  ) = (
    SELECT COUNT(*)
    FROM detail_matrik_translok d2
    WHERE d2.id_matrik_translok = matrik_translok.id
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
				matrik_translok.id LIKE ? OR 
				matrik_translok.id_tim LIKE ? OR 
				master_tim.nama_tim LIKE ? OR 
				matrik_translok.id_nama_survei LIKE ? OR 
				matrik_translok.id_bulan_pengajuan LIKE ? OR 
				master_survei.nama_survei LIKE ? OR 
				matrik_translok.uraian_pengajuan LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				matrik_translok.tahun LIKE ? OR 
				matrik_translok.cek_double LIKE ? OR 
				matrik_translok.create_by LIKE ? OR 
				matrik_translok.create_at LIKE ? OR 
				matrik_translok.harga_satuan_honor LIKE ? OR 
				master_tim.id LIKE ? OR 
				master_tim.status_tim LIKE ? OR 
				master_survei.id LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.kode_bulan LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "matrik_translok/search.php";
		}
		$db->join("master_tim", "matrik_translok.id_tim = master_tim.id", "LEFT");
		$db->join("master_survei", "matrik_translok.id_nama_survei = master_survei.id", "INNER");
		$db->join("master_bulan", "matrik_translok.id_bulan_pengajuan = master_bulan.id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("matrik_translok.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Matrik Translok";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("matrik_translok/list_admin.php", $data); //render the full page
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
		$fields = $this->fields = array("id","status_pengajuan_translok");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'status_pengajuan_translok' => 'required',
			);
			$this->sanitize_array = array(
				'status_pengajuan_translok' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("matrik_translok.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("📢 Data berhasil diupdate", "success");
					return $this->redirect("matrik_translok");
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
						return	$this->redirect("matrik_translok");
					}
				}
			}
		}
		$db->where("matrik_translok.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Matrik Translok";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("matrik_translok/edit_status.php", $data);
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
		$fields = array("matrik_translok.id", 
			"master_tim.nama_tim AS master_tim_nama_tim", 
			"matrik_translok.id_bulan_pengajuan", 
			"master_survei.nama_survei AS master_survei_nama_survei", 
			"matrik_translok.uraian_pengajuan", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"matrik_translok.tahun", 
			"matrik_translok.create_at", 
			"matrik_translok.harga_satuan_honor", 
			"matrik_translok.status_pengajuan_translok", 
			"'📝 List Petugas' AS list_petugas", 
			"(
  SELECT COUNT(*)
  FROM detail_matrik_translok d
  WHERE d.id_matrik_translok = matrik_translok.id
)
 AS jumlah_petugas", 
			"CASE
  -- 1️⃣ BELUM ADA DETAIL → BLANK
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_translok d0
    WHERE d0.id_matrik_translok = matrik_translok.id
  ) = 0
  THEN NULL
  -- 2️⃣ SEMUA DETAIL SUDAH ADA TGL_SP2D VALID → CLEAR
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_translok d
    WHERE d.id_matrik_translok = matrik_translok.id
      AND d.tgl_sp2d IS NOT NULL
      AND d.tgl_sp2d <> ''
      AND d.tgl_sp2d <> '0'
      AND d.tgl_sp2d <> '0000-00-00'
  ) = (
    SELECT COUNT(*)
    FROM detail_matrik_translok d2
    WHERE d2.id_matrik_translok = matrik_translok.id
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
				matrik_translok.id LIKE ? OR 
				matrik_translok.id_tim LIKE ? OR 
				master_tim.nama_tim LIKE ? OR 
				matrik_translok.id_nama_survei LIKE ? OR 
				matrik_translok.id_bulan_pengajuan LIKE ? OR 
				master_survei.nama_survei LIKE ? OR 
				matrik_translok.uraian_pengajuan LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				matrik_translok.tahun LIKE ? OR 
				matrik_translok.cek_double LIKE ? OR 
				matrik_translok.create_by LIKE ? OR 
				matrik_translok.create_at LIKE ? OR 
				matrik_translok.harga_satuan_honor LIKE ? OR 
				master_tim.id LIKE ? OR 
				master_tim.status_tim LIKE ? OR 
				master_survei.id LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.kode_bulan LIKE ? OR 
				matrik_translok.status_pengajuan_translok LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "matrik_translok/search.php";
		}
		$db->join("master_tim", "matrik_translok.id_tim = master_tim.id", "LEFT");
		$db->join("master_survei", "matrik_translok.id_nama_survei = master_survei.id", "INNER");
		$db->join("master_bulan", "matrik_translok.id_bulan_pengajuan = master_bulan.id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("matrik_translok.id", ORDER_TYPE);
		}
		$db->where("create_by='". USER_ID . "'");
		$db->having("status_sp2d = 'SP2D CLEAR'");
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
		$page_title = $this->view->page_title = "Matrik Translok";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("matrik_translok/list_sp2d_clear.php", $data); //render the full page
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
		$fields = array("matrik_translok.id", 
			"master_tim.nama_tim AS master_tim_nama_tim", 
			"master_survei.nama_survei AS master_survei_nama_survei", 
			"matrik_translok.uraian_pengajuan", 
			"master_bulan.bulan AS master_bulan_bulan", 
			"matrik_translok.tahun", 
			"matrik_translok.create_at", 
			"matrik_translok.harga_satuan_honor", 
			"matrik_translok.status_pengajuan_translok", 
			"(
  SELECT COUNT(*)
  FROM detail_matrik_translok d
  WHERE d.id_matrik_translok = matrik_translok.id
)
 AS jumlah_petugas", 
			"CASE
  -- 1️⃣ BELUM ADA DETAIL → BLANK
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_translok d0
    WHERE d0.id_matrik_translok = matrik_translok.id
  ) = 0
  THEN NULL
  -- 2️⃣ SEMUA DETAIL SUDAH ADA TGL_SP2D VALID → CLEAR
  WHEN (
    SELECT COUNT(*)
    FROM detail_matrik_translok d
    WHERE d.id_matrik_translok = matrik_translok.id
      AND d.tgl_sp2d IS NOT NULL
      AND d.tgl_sp2d <> ''
      AND d.tgl_sp2d <> '0'
      AND d.tgl_sp2d <> '0000-00-00'
  ) = (
    SELECT COUNT(*)
    FROM detail_matrik_translok d2
    WHERE d2.id_matrik_translok = matrik_translok.id
  )
  THEN 'SP2D CLEAR'
  -- 3️⃣ SELAIN ITU → UNCLEAR
  ELSE 'SP2D UNCLEAR'
END
 AS status_sp2d", 
			"'📝 List Petugas' AS list_petugas");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				matrik_translok.id LIKE ? OR 
				matrik_translok.id_tim LIKE ? OR 
				master_tim.nama_tim LIKE ? OR 
				matrik_translok.id_nama_survei LIKE ? OR 
				matrik_translok.id_bulan_pengajuan LIKE ? OR 
				master_survei.nama_survei LIKE ? OR 
				matrik_translok.uraian_pengajuan LIKE ? OR 
				master_bulan.bulan LIKE ? OR 
				matrik_translok.tahun LIKE ? OR 
				matrik_translok.cek_double LIKE ? OR 
				matrik_translok.create_by LIKE ? OR 
				matrik_translok.create_at LIKE ? OR 
				matrik_translok.harga_satuan_honor LIKE ? OR 
				master_tim.id LIKE ? OR 
				master_tim.status_tim LIKE ? OR 
				master_survei.id LIKE ? OR 
				master_bulan.id LIKE ? OR 
				master_bulan.kode_bulan LIKE ? OR 
				matrik_translok.status_pengajuan_translok LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "matrik_translok/search.php";
		}
		$db->join("master_tim", "matrik_translok.id_tim = master_tim.id", "LEFT");
		$db->join("master_survei", "matrik_translok.id_nama_survei = master_survei.id", "INNER");
		$db->join("master_bulan", "matrik_translok.id_bulan_pengajuan = master_bulan.id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("matrik_translok.id", ORDER_TYPE);
		}
		$db->having("status_sp2d = 'SP2D CLEAR'");
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		if(!empty($request->master_bulan_bulan)){
			$val = $request->master_bulan_bulan;
			$db->where("master_bulan.bulan", $val , "=");
		}
		if(!empty($request->matrik_translok_tahun)){
			$val = $request->matrik_translok_tahun;
			$db->where("matrik_translok.tahun", $val , "=");
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
		$page_title = $this->view->page_title = "Matrik Translok";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("matrik_translok/list_tu_sp2d_clear.php", $data); //render the full page
	}
}
