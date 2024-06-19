<?php

class DashboardController extends CI_Controller {

    function __construct() {
        parent::__construct();
    }



	function update($productid){
		
		$loginModelJ = $this->session->userdata('loginModel');
		$loginModel =  json_decode($loginModelJ);	
		
		
		
		$productModel = $loginModel->customerModel->productModel;
		
		$i=0;
		$updateProduct = new ProductModel;
		foreach($productModel as $sub)
		{
			if($sub->productid == $productid)
			{
				$updateProduct->productid = $sub->productid;
				$updateProduct->productname = $sub->productname;
				$updateProduct->productdescription = $sub->productdescription;
				$updateProduct->price = $sub->price;
				$updateProduct->productimage = $sub->productimage;
			}				
		}
		
		$updateProductJ = json_encode($updateProduct);
		$data['updateProduct']=$updateProduct;
		$data['maincontent']="admin/updateproductView";
		$this->load->view('includes/admintemplate', $data);  //$data passes the variable to view 
		
		
	}
	
	
	function updateSubject($productid)
	{
		
		//update session
		
		$loginModelJ = $this->session->userdata('loginModel');
		$loginModel =  json_decode($loginModelJ);	
		
		$productModel = $loginModel->customerModel->productModel;
		
		$i=0;
		$newProduct = array();
		foreach($productModel as $sub)
		{
			if($sub->productid == $productid)
			{	
				$newProduct[$i] = new ProductModel();	
				$newProduct[$i]->productid = $this->input->post("productid");
				$newProduct[$i]->productname = $this->input->post("productname");
				$newProduct[$i]->price = $this->input->post("price");
				$newProduct[$i]->productimage = $this->input->post("productimage");
				$newProduct[$i]->productdescription = $this->input->post("productdescription");
				
				$i++;							
			}
			else
			{
				
				$newProduct[$i] = new ProductModel();	
				$newProduct[$i]->productid = $sub->productid;
				$newProduct[$i]->productname = $sub->productname;
				$newProduct[$i]->price =$sub->price;
				$newProduct[$i]->productimage =$sub->productimage;
				$newProduct[$i]->productdescription =$sub->productdescription;
				
				$i++;
			}
		}
		$loginModel->customerModel->productModel = $newProduct;
		$loginModelJ = json_encode($loginModel);
		$this->session->set_userdata("loginModel",$loginModelJ);
		
		
		//END
		
		
		
		
		//update in database
		$product = new ProductModel;
		$product->productid = $this->input->post("productid");
		$product->productname = $this->input->post("productname");
		$product->productdescription = $this->input->post("productdescription");
		$product->price = $this->input->post("price");
		$product->productimage = $this->input->post("productimage");
		
		
		
		
		$this->db->where('productid', $product->productid);
		$this->db->update('product', $product);
		//END
		
		
		$data['maincontent']="admin/updateView";
		$this->load->view('includes/admintemplate', $data);  //$data passes the variable to view 
		
		
	}	
	

	
	function create()
	{
		
		$this->load->model('ProductModel');
		$formArray = array();
		$formArray['productid'] = $this->input->post('productid');
		$formArray['productname'] = $this->input->post('productname');
		$formArray['price'] = $this->input->post('price');
		$formArray['productdescription'] = $this->input->post('productdescription');
		$formArray['productimage'] = $this->input->post('productimage');
		
		
		$this->ProductModel->create($formArray);	

		
		// add in session
		
		$loginModelJ = $this->session->userdata('loginModel');
		$loginModel =  json_decode($loginModelJ);	
		
		$productModel = $loginModel->customerModel->productModel;
		
		array_push($productModel,$formArray);
		
		$loginModel->customerModel->productModel = $productModel;
		$loginModelJ = json_encode($loginModel);
		$this->session->set_userdata("loginModel",$loginModelJ);
		// end
	
		$data['maincontent']="admin/updateView";
		$this->load->view('includes/admintemplate', $data);	
		
	}


	function delete($productid)
	{
		
		
        $this->db->delete('product', array('productid' => $productid)); 
	
		//Remove the subject from session
		
		$loginModelJ = $this->session->userdata('loginModel');
		$loginModel =  json_decode($loginModelJ);	
		
		$productModel = $loginModel->customerModel->productModel;
		
		$i=0;
		$newProduct = array();
		foreach($productModel as $sub)
		{
			if($sub->productid == $productid)
			{
				
			}
			else
			{
				$newProduct[$i] = new ProductModel();	
				$newProduct[$i]->productid = $sub->productid;
				$newProduct[$i]->productname = $sub->productname;
				$newProduct[$i]->price =$sub->price;
				$newProduct[$i]->productimage =$sub->productimage;
				$newProduct[$i]->productdescription =$sub->productdescription;
				
				$i++;
			}
		}
		$loginModel->customerModel->productModel = $newProduct;
		$loginModelJ = json_encode($loginModel);
		$this->session->set_userdata("loginModel",$loginModelJ);
		
		
		//END
		
		
		$data['maincontent']="admin/updateView";
		$this->load->view('includes/admintemplate', $data);  //$data passes the variable to view 
		
		
		
    }







}

?>