<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class gain_loss_forex extends CI_Controller {	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Authentication');
	}
	
	public function home(){
		
                $this->load->model('modelbranch_all');
		$log = $this->session->all_userdata();
		$userLogged = $this->session->userdata('userLogged');
                $branchlist = $this->modelbranch_all->getoption();
		
		if ($userLogged) {
                    
                    if (!empty($_POST)){
                        // apabila tombol proses ditekan
                        // for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'branchlist'  => $branchlist,
			);
			$this->twig->display("reports/gain_loss_forex", $content);
                    }
                    else {
			// for ! proses
                        $content = array (
				"log" => $log,
				"base_url" => base_url(),
                                'branchlist'  => $branchlist,
			);
			$this->twig->display("gain_loss_forex", $content);
                    }    
		}
	}
	
		
}
?>