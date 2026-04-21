<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * bast_id_petugas_bast_option_list Model Action
     * @return array
     */
	function bast_id_petugas_bast_option_list($lookup_bulan_bast){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_petugas AS value, CONCAT(kecamatan,' -> ',nama_petugas) AS label FROM spk_view WHERE bulan_tahun= ? AND status_bast=0 ORDER BY kecamatan ASC"   ;
		$queryparams = array($lookup_bulan_bast);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * bast_bulan_bast_option_list Model Action
     * @return array
     */
	function bast_bulan_bast_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT bulan_tahun AS value,bulan_tahun AS label FROM spk_view WHERE status_bast=0 ORDER by kode_bulan ASC ";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * bast_id_ppk_bast_option_list Model Action
     * @return array
     */
	function bast_id_ppk_bast_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,nama_ppk AS label FROM master_ppk where status_ppk='Aktif' ORDER BY nama_ppk ASC ";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * bast_rincian_output_bast_option_list Model Action
     * @return array
     */
	function bast_rincian_output_bast_option_list($lookup_id_petugas_bast){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_rincian_output AS value,rincian_output AS label FROM spk_view WHERE id_petugas= ?  AND status_bast=0 ORDER BY rincian_output ASC"   ;
		$queryparams = array($lookup_id_petugas_bast);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * bast_nomor_bast_value_exist Model Action
     * @return array
     */
	function bast_nomor_bast_value_exist($val){
		$db = $this->GetModel();
		$db->where("nomor_bast", $val);
		$exist = $db->has("bast");
		return $exist;
	}

	/**
     * detail_matrik_honor_id_petugas_option_list Model Action
     * @return array
     */
	function detail_matrik_honor_id_petugas_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,CONCAT(nama_petugas,' | ',alamat,' | ',kecamatan) AS label FROM master_petugas Where status_petugas='Aktif' ORDER BY nama_petugas ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * detail_matrik_honor_jabatan_option_list Model Action
     * @return array
     */
	function detail_matrik_honor_jabatan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,jabatan AS label FROM master_jabatan_petugas ORDER BY jabatan ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * detail_matrik_honor_satuan_option_list Model Action
     * @return array
     */
	function detail_matrik_honor_satuan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,satuan AS label FROM master_satuan ORDER BY satuan ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * master_petugas_nik_value_exist Model Action
     * @return array
     */
	function master_petugas_nik_value_exist($val){
		$db = $this->GetModel();
		$db->where("nik", $val);
		$exist = $db->has("master_petugas");
		return $exist;
	}

	/**
     * master_ppk_nip_ppk_value_exist Model Action
     * @return array
     */
	function master_ppk_nip_ppk_value_exist($val){
		$db = $this->GetModel();
		$db->where("nip_ppk", $val);
		$exist = $db->has("master_ppk");
		return $exist;
	}

	/**
     * master_sbml_jabatan_value_exist Model Action
     * @return array
     */
	function master_sbml_jabatan_value_exist($val){
		$db = $this->GetModel();
		$db->where("jabatan", $val);
		$exist = $db->has("master_sbml");
		return $exist;
	}

	/**
     * master_survei_id_rincian_output_option_list Model Action
     * @return array
     */
	function master_survei_id_rincian_output_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,rincian_output AS label FROM master_rincian_output ORDER BY rincian_output ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * matrik_honor_id_tim_option_list Model Action
     * @return array
     */
	function matrik_honor_id_tim_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_tim AS value,id_tim AS label FROM user WHERE id=?" ;
		$queryparams = array(USER_ID);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * matrik_honor_id_tim_default_value Model Action
     * @return Value
     */
	function matrik_honor_id_tim_default_value(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_tim AS value,id_tim AS label FROM user WHERE id=?" ;
		$queryparams = array(USER_ID);
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * matrik_honor_id_rincian_output_option_list Model Action
     * @return array
     */
	function matrik_honor_id_rincian_output_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,rincian_output AS label FROM master_rincian_output WHERE status_rincian_output='Aktif' ORDER BY rincian_output ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * matrik_honor_id_nama_survei_option_list Model Action
     * @return array
     */
	function matrik_honor_id_nama_survei_option_list($lookup_id_rincian_output){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,nama_survei AS label FROM master_survei WHERE id_rincian_output= ? ORDER BY nama_survei ASC" ;
		$queryparams = array($lookup_id_rincian_output);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * matrik_honor_id_bulan_pelaksanaan_option_list Model Action
     * @return array
     */
	function matrik_honor_id_bulan_pelaksanaan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,bulan AS label FROM master_bulan ORDER BY id ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_bulan_spk_option_list Model Action
     * @return array
     */
	function spk_bulan_spk_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT bulan_tahun AS value,bulan_tahun AS label FROM spk_view WHERE status_spk=0 ORDER by kode_bulan ASC ";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_id_ppk_option_list Model Action
     * @return array
     */
	function spk_id_ppk_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,nama_ppk AS label FROM master_ppk Where status_ppk='Aktif' ORDER BY nama_ppk ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_id_petugas_spk_option_list Model Action
     * @return array
     */
	function spk_id_petugas_spk_option_list($lookup_bulan_spk){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_petugas AS value, CONCAT(kecamatan,' -> ',nama_petugas) AS label FROM spk_view WHERE bulan_tahun= ? AND status_spk=0 ORDER BY kecamatan ASC"         ;
		$queryparams = array($lookup_bulan_spk);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_nomor_spk_value_exist Model Action
     * @return array
     */
	function spk_nomor_spk_value_exist($val){
		$db = $this->GetModel();
		$db->where("nomor_spk", $val);
		$exist = $db->has("spk");
		return $exist;
	}

	/**
     * spk_bulan_spk_option_list_2 Model Action
     * @return array
     */
	function spk_bulan_spk_option_list_2(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT bulan_tahun AS value,bulan_tahun AS label FROM spk_view WHERE status_Spk=0 ORDER by kode_bulan ASC ";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_id_ppk_option_list_2 Model Action
     * @return array
     */
	function spk_id_ppk_option_list_2(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,nama_ppk AS label FROM master_ppk ORDER BY nama_ppk ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_id_petugas_spk_option_list_2 Model Action
     * @return array
     */
	function spk_id_petugas_spk_option_list_2($lookup_bulan_spk){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_petugas AS value,nama_petugas AS label FROM spk_view WHERE bulan_tahun= ? AND status_spk=0 ORDER BY nama_petugas ASC"  ;
		$queryparams = array($lookup_bulan_spk);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_detail_matrik_honor_id_petugas_option_list Model Action
     * @return array
     */
	function spk_detail_matrik_honor_id_petugas_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,CONCAT(nama_petugas,' | ',alamat,' | ',kecamatan) AS label FROM master_petugas Where status_petugas='Aktif' ORDER BY nama_petugas ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_detail_matrik_honor_jabatan_option_list Model Action
     * @return array
     */
	function spk_detail_matrik_honor_jabatan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,jabatan AS label FROM master_jabatan_petugas ORDER BY jabatan ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_detail_matrik_honor_satuan_option_list Model Action
     * @return array
     */
	function spk_detail_matrik_honor_satuan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,satuan AS label FROM master_satuan ORDER BY satuan ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_matrik_honor_id_tim_option_list Model Action
     * @return array
     */
	function spk_matrik_honor_id_tim_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_tim AS value,id_tim AS label FROM user WHERE id=?" ;
		$queryparams = array(USER_ID);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_matrik_honor_id_rincian_output_option_list Model Action
     * @return array
     */
	function spk_matrik_honor_id_rincian_output_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,rincian_output AS label FROM master_rincian_output WHERE status_rincian_output='Aktif' ORDER BY rincian_output ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_matrik_honor_id_nama_survei_option_list Model Action
     * @return array
     */
	function spk_matrik_honor_id_nama_survei_option_list($lookup_id_rincian_output){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,nama_survei AS label FROM master_survei WHERE id_rincian_output= ? ORDER BY nama_survei ASC" ;
		$queryparams = array($lookup_id_rincian_output);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_matrik_honor_id_bulan_pelaksanaan_option_list Model Action
     * @return array
     */
	function spk_matrik_honor_id_bulan_pelaksanaan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,bulan AS label FROM master_bulan ORDER BY id ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * user_id_tim_option_list Model Action
     * @return array
     */
	function user_id_tim_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,nama_tim AS label FROM master_tim ORDER BY id ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * user_nip_value_exist Model Action
     * @return array
     */
	function user_nip_value_exist($val){
		$db = $this->GetModel();
		$db->where("nip", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * user_nama_user_value_exist Model Action
     * @return array
     */
	function user_nama_user_value_exist($val){
		$db = $this->GetModel();
		$db->where("nama_user", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * user_email_value_exist Model Action
     * @return array
     */
	function user_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * matrik_translok_id_nama_survei_option_list Model Action
     * @return array
     */
	function matrik_translok_id_nama_survei_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,nama_survei AS label FROM master_survei ORDER BY nama_survei ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * matrik_translok_id_tim_default_value Model Action
     * @return Value
     */
	function matrik_translok_id_tim_default_value(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_tim AS value,id_tim AS label FROM user WHERE id=?" ;
		$queryparams = array(USER_ID);
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * matrik_translok_id_bulan_pengajuan_option_list Model Action
     * @return array
     */
	function matrik_translok_id_bulan_pengajuan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,bulan AS label FROM master_bulan ORDER BY id ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * detail_matrik_translok_id_user_option_list Model Action
     * @return array
     */
	function detail_matrik_translok_id_user_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,nama_user AS label FROM user Where status='Aktif' AND id!=1 ORDER BY nama_user ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * detail_matrik_translok_satuan_option_list Model Action
     * @return array
     */
	function detail_matrik_translok_satuan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,satuan AS label FROM master_satuan ORDER BY satuan ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * jadwal_translok_id_nama_survei_option_list Model Action
     * @return array
     */
	function jadwal_translok_id_nama_survei_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,nama_survei AS label FROM master_survei Where status_survei='Aktif' ORDER BY nama_survei ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * matrik_honor_master_bulanbulan_option_list Model Action
     * @return array
     */
	function matrik_honor_master_bulanbulan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT bulan AS value,bulan AS label FROM master_bulan ORDER BY id ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * matrik_honor_matrik_honortahun_option_list Model Action
     * @return array
     */
	function matrik_honor_matrik_honortahun_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT tahun AS value,tahun AS label FROM matrik_honor ORDER BY tahun DESC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_view_spk_viewbulan_tahun_option_list Model Action
     * @return array
     */
	function spk_view_spk_viewbulan_tahun_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT bulan_tahun AS value,bulan_tahun AS label FROM spk_view ORDER BY bulan_tahun ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * spk_view_spk_viewnama_petugas_option_list Model Action
     * @return array
     */
	function spk_view_spk_viewnama_petugas_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT nama_petugas AS value,nama_petugas AS label FROM spk_view ORDER BY nama_petugas ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * sbml_detail_view_sbml_detail_viewid_petugas_option_list Model Action
     * @return array
     */
	function sbml_detail_view_sbml_detail_viewid_petugas_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_petugas AS value,id_petugas AS label FROM sbml_detail_view";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * sbml_detail_view_sbml_detail_viewbulan_tahun_option_list Model Action
     * @return array
     */
	function sbml_detail_view_sbml_detail_viewbulan_tahun_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT bulan_tahun AS value,bulan_tahun AS label FROM sbml_detail_view";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * matrik_translok_master_bulanbulan_option_list Model Action
     * @return array
     */
	function matrik_translok_master_bulanbulan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT bulan AS value,bulan AS label FROM master_bulan ORDER BY id ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * matrik_translok_matrik_transloktahun_option_list Model Action
     * @return array
     */
	function matrik_translok_matrik_transloktahun_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT tahun AS value,tahun AS label FROM matrik_translok ORDER BY tahun DESC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * rekap_translok_view_rekap_translok_viewbulan_option_list Model Action
     * @return array
     */
	function rekap_translok_view_rekap_translok_viewbulan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT bulan AS value,bulan AS label FROM master_bulan ORDER BY id ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * rekap_translok_view_rekap_translok_viewtahun_option_list Model Action
     * @return array
     */
	function rekap_translok_view_rekap_translok_viewtahun_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT tahun AS value,tahun AS label FROM rekap_translok_view ORDER BY tahun DESC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * rekap_translok_view_rekap_translok_viewnama_user_option_list Model Action
     * @return array
     */
	function rekap_translok_view_rekap_translok_viewnama_user_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT nama_user AS value,nama_user AS label FROM rekap_translok_view ORDER BY nama_user ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * jadwal_translok_view_jadwal_translok_viewnama_user_option_list Model Action
     * @return array
     */
	function jadwal_translok_view_jadwal_translok_viewnama_user_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT nama_user AS value,nama_user AS label FROM jadwal_translok_view ORDER BY nama_user ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * jadwal_translok_view_jadwal_translok_viewtahun_option_list Model Action
     * @return array
     */
	function jadwal_translok_view_jadwal_translok_viewtahun_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT tahun AS value,tahun AS label FROM jadwal_translok_view ORDER BY tahun DESC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * getcount_jumlahpetugas Model Action
     * @return Value
     */
	function getcount_jumlahpetugas(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM master_petugas where status_petugas='Aktif'";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_jumlahpegawai Model Action
     * @return Value
     */
	function getcount_jumlahpegawai(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM user where status='Aktif' and nama_user !='Admin'";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_matrikhonor Model Action
     * @return Value
     */
	function getcount_matrikhonor(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS jumlah_sp2d_clear
FROM (
    SELECT mh.id
    FROM matrik_honor mh
    LEFT JOIN detail_matrik_honor d
        ON d.id_matrik_honor = mh.id
    GROUP BY mh.id
    HAVING
        COUNT(d.id) > 0
        AND SUM(
            CASE
                WHEN d.tgl_sp2d IS NOT NULL
                 AND d.tgl_sp2d <> ''
                 AND d.tgl_sp2d <> '0'
                 AND d.tgl_sp2d <> '0000-00-00'
                THEN 1 ELSE 0
            END
        ) = COUNT(d.id)
) AS x;
";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_matrikhonor_2 Model Action
     * @return Value
     */
	function getcount_matrikhonor_2(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS jumlah_sp2d_unclear
FROM (
    SELECT mh.id
    FROM matrik_honor mh
    LEFT JOIN detail_matrik_honor d
        ON d.id_matrik_honor = mh.id
    GROUP BY mh.id
    HAVING
        COUNT(d.id) > 0
        AND SUM(
            CASE
                WHEN d.tgl_sp2d IS NOT NULL
                 AND d.tgl_sp2d <> ''
                 AND d.tgl_sp2d <> '0'
                 AND d.tgl_sp2d <> '0000-00-00'
                THEN 1 ELSE 0
            END
        ) < COUNT(d.id)
) AS x;
";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_matriktranslok Model Action
     * @return Value
     */
	function getcount_matriktranslok(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS jumlah_sp2d_clear
FROM (
    SELECT mh.id
    FROM matrik_translok mh
    LEFT JOIN detail_matrik_translok d
    ON d.id_matrik_translok = mh.id
    GROUP BY mh.id
    HAVING
        COUNT(d.id) > 0
        AND SUM(
            CASE
                WHEN d.tgl_sp2d IS NOT NULL
                 AND d.tgl_sp2d <> ''
                 AND d.tgl_sp2d <> '0'
                 AND d.tgl_sp2d <> '0000-00-00'
                THEN 1 ELSE 0
            END
        ) = COUNT(d.id)
) AS x;
";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_matriktranslok_2 Model Action
     * @return Value
     */
	function getcount_matriktranslok_2(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS jumlah_sp2d_unclear
FROM (
    SELECT mh.id
    FROM matrik_translok mh
    LEFT JOIN detail_matrik_translok d
    ON d.id_matrik_translok = mh.id
    GROUP BY mh.id
    HAVING
        COUNT(d.id) > 0
        AND SUM(
            CASE
                WHEN d.tgl_sp2d IS NOT NULL
                 AND d.tgl_sp2d <> ''
                 AND d.tgl_sp2d <> '0'
                 AND d.tgl_sp2d <> '0000-00-00'
                THEN 1 ELSE 0
            END
        ) < COUNT(d.id)
) AS x;
";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_jumlahpengajuanhonor Model Action
     * @return Value
     */
	function getcount_jumlahpengajuanhonor(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num
FROM matrik_honor
WHERE id_bulan_pelaksanaan = MONTH(CURDATE())
  AND tahun = YEAR(CURDATE());
";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_jumlahpengajuantranslok Model Action
     * @return Value
     */
	function getcount_jumlahpengajuantranslok(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num
FROM matrik_translok
WHERE id_bulan_pengajuan = MONTH(CURDATE())
  AND tahun = YEAR(CURDATE());
";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
