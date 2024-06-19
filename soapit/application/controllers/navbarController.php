<?php

class NavbarController extends CI_Controller {

    function __construct() {
        parent::__construct();

    }
	
	
	
	function customizepage(){
		
		$data['maincontent']="customizeView";
		$this->load->view('includes/customerCollectiontemplate', $data); 
		
		
	}
	function aboutpage(){
		
		$data['maincontent']="aboutView";
		$this->load->view('includes/customerCollectiontemplate', $data); 
		
		
	}
	function adminorderpage(){
		
		$data['maincontent']="admin/orderView";
		$this->load->view('includes/admintemplate', $data); 
		
		
	}
	function updatepage(){
		
		$data['maincontent']="admin/updateView";
		$this->load->view('includes/admintemplate', $data); 
		
		
	}
	function addpage(){
		
		$data['maincontent']="admin/addView";
		$this->load->view('includes/admintemplate', $data); 
		
		
	}
	function deletepage(){
		
		$data['maincontent']="admin/deleteView";
		$this->load->view('includes/admintemplate', $data); 
		
		
	}

	

}

?>
