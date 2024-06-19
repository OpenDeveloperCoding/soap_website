<?php

class LoginController extends CI_Controller {

    function __construct() {
        parent::__construct();

    }
	
	
	function index(){
		$this->load->library('session');
		
		$loginModel = $this->session->userdata('loginModel');
		$loggedin = $this->session->loggedin;
		$inadmin = $this->session->inadmin;
		
		if($loggedin==TRUE)
		{	
			if($inadmin==TRUE)
			{
					$data['maincontent']="admin/dashboardAdminView";
					$this->load->view('includes/admintemplate', $data); 
			}
			else
			{
				$data['maincontent']="dashboardView";
				$this->load->view('includes/customertemplate', $data);  //$data passes the variable to view 
			}
	
			  
		}
		else
		{
		$data['error1'] = '';
		$data['error'] = json_encode($loginModel);
		$data['maincontent']="loginView";
		$this->load->view('includes/template', $data);  //$data passes the variable to view   
		}
	}
	
	
	function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		$data['error1'] = "You have successfully logged out!!";
		$data['maincontent']="loginView";
		$this->load->view('includes/template', $data);  //$data passes the variable to view 
		
	}	
	
	
	
	
	
	
	
	
	
	
	function register(){
		$data['maincontent']="registerView";
        $this->load->view('includes/template', $data);
	}
	
	
	function login()
	{
		//Get username and password from loginView
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		//Initialise LoginModel and call the authenticate method to do validation
		$loginModel = new LoginModel();
		$loginModel = $loginModel->authenticate($email, $password);
		
			$this->session->set_userdata('loginModel', json_encode($loginModel));
			$this->session->set_userdata('loggedin', TRUE);			
		
		if($loginModel!=null && $loginModel->loggedin == 'Y')
		{
			if($loginModel->type == 'customer')
			{
				$data['maincontent']="dashboardView";
				$this->load->view('includes/customertemplate', $data);  //$data passes the variable to view   
				
			}
			else if($loginModel->type == 'admin')
			{
				$this->session->set_userdata('inadmin', TRUE);
				$data['maincontent']="admin/dashboardAdminView";
				$this->load->view('includes/admintemplate', $data);  //$data passes the variable to view   
				
			}
			
		}
		else
		{
			$data['error1'] = "Username or Password is invalid";
			$data['maincontent']="loginView";
			$this->load->view('includes/template', $data);  //$data passes the variable to view   
		}
			
	}
}

?>
