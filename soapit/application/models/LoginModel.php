<?php

class LoginModel extends CI_Model{

	public $email;
    public $password;	
	public $status;
	public $type;
	public $customerModel;
	public $loggedin;
	public $test;

	function authenticate($email,$password)
	{
		//SQL Query to validate
		$sql = "select * from login where email = ? and password= ? and status = 'active'";
		$query = $this->db->query($sql,array($email,$password));
		$customerModel = new CustomerModel();	
		if($query->num_rows()>0)
		{
			foreach($query->result() as $roww)
			{
				$data[] = $roww;
			}
			
				
			if($data[0]->type == 'admin')
			{	
		
				$loginModel = new LoginModel();
					
				$customerModel = new CustomerModel();
				$customerModel = $customerModel->getDataByAdminid($email);
					
				$loginModel->customerModel = $customerModel;
				$loginModel->loggedin = 'Y';
				$loginModel->email = $email;
				$loginModel->status = $data[0]->status;
				$loginModel->type = $data[0]->type;
				$loginModel->test = 'admin';			

				return $loginModel;
				
			}
			else if ($data[0]->type == 'customer')
			{
				$loginModel = new LoginModel();
				$customerModel = $customerModel->getDataByCustomerid($email);
				$loginModel->customerModel = $customerModel;
				$loginModel->loggedin = 'Y';
				$loginModel->email = $email;
				$loginModel->status = $data[0]->status;
				$loginModel->type = $data[0]->type;
				$loginModel->test = "incustomer";
				
				return $loginModel;
			}
		}
		else{
			return null;
		}

		
		
	}





}