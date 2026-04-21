<?php 
/**
 * Account Page Controller
 * @category  Controller
 */
class AccountController extends SecureController{
	function __construct(){
		parent::__construct(); 
		$this->tablename = "user";
	}
	/**
		* Index Action
		* @return null
		*/
	function index(){
		$db = $this->GetModel();
		$rec_id = $this->rec_id = USER_ID; //get current user id from session
		$db->where ("id", $rec_id);
		$tablename = $this->tablename;
		$fields = array("user.id", 
			"user.nip", 
			"user.nama_user", 
			"user.id_tim", 
			"master_tim.nama_tim AS master_tim_nama_tim", 
			"user.status", 
			"user.email", 
			"user.role");
		$db->join("master_tim", "user.id_tim = master_tim.id", "INNER");
		$user = $db->getOne($tablename , $fields);
		if(!empty($user)){
			$page_title = $this->view->page_title = "My Account";
			$this->render_view("account/view.php", $user);
		}
		else{
			$this->set_page_error();
			$this->render_view("account/view.php");
		}
	}
	/**
     * Update user account record with formdata
	 * @param $formdata array() from $_POST
     * @return array
     */
	function edit($formdata = null){
		$request = $this->request;
		$db = $this->GetModel();
		$rec_id = $this->rec_id = USER_ID;
		$tablename = $this->tablename;
		 //editable fields
		$fields = $this->fields = array("id","nip","nama_user","foto","id_tim","status","email","role");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'nip' => 'required|numeric',
				'nama_user' => 'required',
				'foto' => 'required',
				'id_tim' => 'required',
				'status' => 'required',
				'email' => 'required|valid_email',
				'role' => 'required',
			);
			$this->sanitize_array = array(
				'nip' => 'sanitize_string',
				'nama_user' => 'sanitize_string',
				'foto' => 'sanitize_string',
				'id_tim' => 'sanitize_string',
				'status' => 'sanitize_string',
				'email' => 'sanitize_string',
				'role' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			//Check if Duplicate Record Already Exit In The Database
			if(isset($modeldata['nip'])){
				$db->where("nip", $modeldata['nip'])->where("id", $rec_id, "!=");
				if($db->has($tablename)){
					$this->view->page_error[] = $modeldata['nip']." Data sudah ada!";
				}
			}
			//Check if Duplicate Record Already Exit In The Database
			if(isset($modeldata['nama_user'])){
				$db->where("nama_user", $modeldata['nama_user'])->where("id", $rec_id, "!=");
				if($db->has($tablename)){
					$this->view->page_error[] = $modeldata['nama_user']." Data sudah ada!";
				}
			}
			//Check if Duplicate Record Already Exit In The Database
			if(isset($modeldata['email'])){
				$db->where("email", $modeldata['email'])->where("id", $rec_id, "!=");
				if($db->has($tablename)){
					$this->view->page_error[] = $modeldata['email']." Data sudah ada!";
				}
			} 
			if($this->validated()){
				$db->where("user.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					$db->where ("id", $rec_id);
					$user = $db->getOne($tablename , "*");
					set_session("user_data", $user);// update session with new user data
					return $this->redirect("account");
				}
				else{
					if($db->getLastError()){
						$this->set_page_error();
					}
					elseif(!$numRows){
						//not an error, but no record was updated
						$this->set_flash_msg("Tidak ada data yang diupdate", "warning");
						return	$this->redirect("account");
					}
				}
			}
		}
		$db->where("user.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "My Account";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("account/edit.php", $data);
	}
	/**
     * Change account email
     * @return BaseView
     */
	function change_email($formdata = null){
		if($formdata){
			$email = trim($formdata['email']);
			$db = $this->GetModel();
			$rec_id = $this->rec_id = USER_ID; //get current user id from session
			$tablename = $this->tablename;
			$db->where ("id", $rec_id);
			$result = $db->update($tablename, array('email' => $email ));
			if($result){
			}
			else{
				$this->set_page_error("Email tidak diubah");
			}
		}
		return $this->render_view("account/change_email.php");
	}
}
