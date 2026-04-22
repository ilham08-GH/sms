<?php 

/**
 * Home Page Controller
 * @category  Controller
 */
class HomeController extends SecureController{
	/**
     * Index Action
     * @return View
     */
	function index(){
		
		$user_role = strtolower(USER_ROLE);
    
		// Jika Mitra mencoba masuk ke Home, paksa pindah ke halaman SPK
		if ($user_role == 'mitra') {
			$this->redirect("spk"); 
			return;
		}

		// ... sisa kode view home asli Anda ...
		$this->render_view("home/index.php");

	}
}
