<?php

class CustomerModel extends CI_Model{

	public $customerid;
    public $cfname;	
	public $csname;
	public $pincode;	
	public $pnum;
    public $email;
	public $password;
	public $ordersModel;

	

	function getDataByCustomerid($email)
	{
		$customerModel = new CustomerModel();
		$sql2 = "select * from customer where email=?";
		$query2 = $this->db->query($sql2,array($email));
		
		if($query2->num_rows()>0)
		{
			foreach ($query2->result() as $row) {
			
				$customerModel->cfname = $row->cfname;
				$customerModel->csname = $row->csname;
				$customerModel->customerid = $row->customerid;
				$customerModel->pincode = $row->pincode;
				$customerModel->pnum = $row->pnum;
				$customerModel->email = $row->email;
				
			
			}
			
			$productModel = new ProductModel();
			$productModel = $productModel->getAllProduct();
			$customerModel->productModel = $productModel;
			
			$ordersModel = new OrdersModel();
			$ordersModel = $ordersModel->getOrder($email);
			$customerModel->ordersModel = $ordersModel;

			return $customerModel;
			
		}
		else
		{
			$error = "not";
			return $error;
			
		}
		
		
	}
	
	
	function getDataByAdminid($email)
	{
		$customerModel = new CustomerModel();
		$sql2 = "select * from customer where email=?";
		$query2 = $this->db->query($sql2,array($email));
		
		if($query2->num_rows()>0)
		{
			foreach ($query2->result() as $row) {
			
				$customerModel->cfname = $row->cfname;
				$customerModel->csname = $row->csname;
				$customerModel->customerid = $row->customerid;
				$customerModel->pincode = $row->pincode;
				$customerModel->pnum = $row->pnum;
				$customerModel->email = $row->email;
				
			
			}
			
			$productModel = new ProductModel();
			$productModel = $productModel->getAllProduct();
			$customerModel->productModel = $productModel;
			
			$ordersModel = new OrdersModel();
			$ordersModel = $ordersModel->getAllOrder();
			$customerModel->ordersModel = $ordersModel;
			
			return $customerModel;
		
		
		}
		else
		{
			$error = "not";
			return $error;
			
		}
		
		
	}






}