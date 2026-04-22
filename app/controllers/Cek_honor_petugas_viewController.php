<?php 
/**
 * Cek_honor_petugas_view Page Controller
 * @category  Controller
 */
class Cek_honor_petugas_viewController extends SecureController{
    function __construct(){
        parent::__construct();
        $this->tablename = "cek_honor_petugas_view";
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

        // 1. Tambahkan 'nik' ke dalam fields agar bisa dibaca dari View Database
        $fields = array("bulan", 
            "tahun", 
            "nama_petugas",
            "email",
            "nik", // PASTIKAN KOLOM INI ADA DI VIEW DATABASE ANDA
            "uraian_kegiatan", 
            "volume_bast", 
            "nama_satuan", 
            "harga_satuan", 
            "total_honor", 
            "terbit_sp2d", 
            "tgl_sp2d");

        $pagination = $this->get_pagination(MAX_RECORD_COUNT);
        
        $user_role = strtolower(USER_ROLE);
        
        if($user_role == 'mitra'){
            // Jika Mitra: Kunci data hanya untuk email mereka sendiri
            $user_email = strtolower(trim(get_active_user('email')));
            if(!empty($user_email)){
                $db->where("LOWER(cek_honor_petugas_view.email) = ?", [$user_email]);
            }
        } else {
            // Jika Pegawai/Admin: Aktifkan fitur Pencarian
            if(!empty($request->search)){
                $text = trim($request->search); 
                // Tambahkan 'nik' ke dalam list LIKE agar bisa dicari
                $search_condition = "(
                    cek_honor_petugas_view.nama_petugas LIKE ? OR 
                    cek_honor_petugas_view.email LIKE ? OR 
                    cek_honor_petugas_view.nik LIKE ? OR 
                    cek_honor_petugas_view.uraian_kegiatan LIKE ?
                )";
                $search_params = array("%$text%", "%$text%", "%$text%", "%$text%");
                $db->where($search_condition, $search_params);
            }
        }

        if(!empty($request->orderby)){
            $orderby = $request->orderby;
            $ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
            $db->orderBy($orderby, $ordertype);
        } else {
            $db->orderBy("tahun", "DESC");
            $db->orderBy("bulan", "DESC");
        }

        if($fieldname){
            $db->where($fieldname , $fieldvalue);
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

        $page_title = $this->view->page_title = "Cek Honor Petugas View";
        $this->render_view("cek_honor_petugas_view/list.php", $data);
    }
}