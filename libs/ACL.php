<?php
/**
 * Page Access Control
 * @category  RBAC Helper
 */
defined('ROOT') or exit('No direct script access allowed');
class ACL
{
	

	/**
	 * Array of user roles and page access 
	 * Use "*" to grant all access right to particular user role
	 * @var array
	 */
	public static $role_pages = array(
			'administrator' =>
						array(
							'bast' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'detail_matrik_honor' => array('list','view','add','edit', 'editfield','delete','import_data','list_tu','list_sp2d_clear','toggle_field'),
							'master_bulan' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'master_petugas' => array('list','view','add','edit', 'editfield','delete','import_data','list_petugas','list_petugas_id_cek'),
							'master_ppk' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'master_rincian_output' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'master_sbml' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'master_survei' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'master_tim' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'matrik_honor' => array('list','view','add','edit', 'editfield','delete','import_data','list_tu','list_admin','edit_status','list_sp2d_clear','list_tu_sp2d_clear'),
							   'spk' => array('list','view','add','edit', 'editfield','delete','import_data','view2','approve_pdf'),
							'user' => array('list','view','add','edit', 'editfield','delete','import_data','accountedit','accountview'),
							'master_jabatan_petugas' => array('list','view','add','edit', 'editfield','delete','list_jabatan_cek_id'),
							'master_satuan' => array('list','view','add','edit', 'editfield','delete','list_satuan_cek_id'),
							'spk_view' => array('list','view','rekap_honor'),
							'copy_petugas_view' => array('list','view'),
							'sbml_view' => array('list','view'),
							'sbml_detail_view' => array('list','view'),
							'matrik_translok' => array('list','view','add','edit', 'editfield','delete','list_tu','list_admin','edit_status','list_sp2d_clear','list_tu_sp2d_clear'),
							'detail_matrik_translok' => array('list','view','add','edit', 'editfield','delete','list_tu','list_sp2d_clear','toggle_field'),
							'rekap_translok_view' => array('list','view','translok_petugas'),
							'jadwal_translok' => array('list','view','add','edit', 'editfield','delete'),
							'jadwal_translok_view' => array('list','view'),
							'cek_honor_petugas_view' => array('list','view'),
							'cek_sbml_view' => array('list','view'),
							'copy_spk_to_detail' => array('list','view','add','edit', 'editfield','delete'),
							'ed_detail_matrik_honor' => array('list','view','add','edit', 'editfield','delete','result')
						),
		
			'ketua tim' =>
						array(
							'detail_matrik_honor' => array('list','view','add','edit', 'editfield','delete','import_data','list_sp2d_clear'),
							'master_petugas' => array('list_petugas','list_petugas_id_cek'),
							'matrik_honor' => array('list','view','add','edit', 'editfield','delete','import_data','edit_status','list_sp2d_clear'),
							'user' => array('accountedit','accountview'),
							'master_jabatan_petugas' => array('list_jabatan_cek_id'),
							'master_satuan' => array('list_satuan_cek_id'),
							'spk_view' => array('rekap_honor'),
							'copy_petugas_view' => array('list','view'),
							'matrik_translok' => array('list','view','add','edit', 'editfield','delete','edit_status','list_sp2d_clear'),
							'detail_matrik_translok' => array('list','view','add','edit', 'editfield','delete','list_sp2d_clear'),
							'rekap_translok_view' => array('list','translok_petugas'),
							'jadwal_translok' => array('list','view','add','edit', 'editfield','delete'),
							'jadwal_translok_view' => array('list'),
							'cek_honor_petugas_view' => array('list','view'),
							'copy_spk_to_detail' => array('list','view','add','edit', 'editfield','delete'),
							'ed_detail_matrik_honor' => array('list','view','add','edit', 'editfield','delete','result')
						),
		
			'anggota tim' =>
						array(
							'rekap_translok_view' => array('translok_petugas'),
							'jadwal_translok' => array('list','view','add','edit', 'editfield','delete','import_data')
						),
		
			'tu' =>
						array(
							'bast' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'detail_matrik_honor' => array('list','view','add','edit', 'editfield','delete','list_tu','toggle_field'),
							'master_petugas' => array('list_petugas'),
							'master_rincian_output' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'master_sbml' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'master_survei' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'matrik_honor' => array('list_tu','list_tu_sp2d_clear'),
							   'spk' => array('list','view','add','edit', 'editfield','delete','view2','import_data','approve_pdf'),
							'master_jabatan_petugas' => array('list','view','add','edit', 'editfield','delete','list_jabatan_cek_id','import_data'),
							'master_satuan' => array('list','view','add','edit', 'editfield','delete','list_satuan_cek_id','import_data'),
							'spk_view' => array('list','view','rekap_honor'),
							'copy_petugas_view' => array('list','view'),
							'sbml_view' => array('list','view'),
							'sbml_detail_view' => array('list','view'),
							'matrik_translok' => array('list_tu','list_tu_sp2d_clear'),
							'detail_matrik_translok' => array('list','view','add','edit', 'editfield','delete','list_tu','toggle_field'),
							'rekap_translok_view' => array('list','translok_petugas'),
							'jadwal_translok' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'jadwal_translok_view' => array('list'),
							'cek_honor_petugas_view' => array('list'),
							'cek_sbml_view' => array('list')
						),
			'mitra' => array(
						'spk'  => array('list', 'view', 'approve_mitra', 'upload_pdf'),
						'bast' => array('list', 'view'),
						'user' => array('accountedit', 'accountview'),
					),
		);

	/**
	 * Current user role name
	 * @var string
	 */
	public static $user_role = null;

	/**
	 * pages to Exclude From Access Validation Check
	 * @var array
	 */
	public static $exclude_page_check = array("", "index", "home", "account", "info", "masterdetail");

	/**
	 * Init page properties
	 */
	public function __construct()
	{	
		if(!empty(USER_ROLE)){
			self::$user_role = USER_ROLE;
		}
	}

	/**
	 * Check page path against user role permissions
	 * if user has access return AUTHORIZED
	 * if user has NO access return UNAUTHORIZED
	 * if user has NO role return NO_ROLE
	 * @return string
	 */
	public static function GetPageAccess($path)
	{
		$rp = self::$role_pages;
		if ($rp == "*") {
			return AUTHORIZED; // Grant access to any user
		} else {
			$path = strtolower(trim($path, '/'));

			$arr_path = explode("/", $path);
			$page = strtolower($arr_path[0]);

			//If user is accessing excluded access contrl pages
			if (in_array($page, self::$exclude_page_check)) {
				return AUTHORIZED;
			}

			$user_role = strtolower(USER_ROLE); // Get user defined role from session value
			if (array_key_exists($user_role, $rp)) {
				$action = (!empty($arr_path[1]) ? $arr_path[1] : "list");
				if ($action == "index") {
					$action = "list";
				}
				//Check if user have access to all pages or user have access to all page actions
				if ($rp[$user_role] == "*" || (!empty($rp[$user_role][$page]) && $rp[$user_role][$page] == "*")) {
					return AUTHORIZED;
				} else {
					if (!empty($rp[$user_role][$page]) && in_array($action, $rp[$user_role][$page])) {
						return AUTHORIZED;
					}
				}
				return FORBIDDEN;
			} else {
				//User does not have any role.
				return NOROLE;
			}
		}
	}

	/**
	 * Check if user role has access to a page
	 * @return Bool
	 */
	public static function is_allowed($path)
	{
		return (self::GetPageAccess($path) == AUTHORIZED);
	}

}
