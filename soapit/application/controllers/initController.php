<?php

class InitController extends CI_Controller {

    function __construct() {
        parent::__construct();
     
    }


    function index(){
		
		//Do Initialization or prefetch to display on the first page
		
		
		//Redirect to first page
		$data['error1'] = "";
		$data['maincontent']="loginView";
        $this->load->view('includes/template', $data);  //$data passes the variable to view      
    }


}

?>
