<?php

class ProductModel extends CI_Model{

	public $productid;
    public $productname;	
	public $price;
	
	public $productimage;
	public $productdescription;	


	function getAllProduct()
	{
		$productModel = new ProductModel();
		$products = array();
		$sql = "select * from product";
		$query = $this->db->query($sql);
		$i=0;
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					
					$products[$i] = new ProductModel();
					$products[$i]->productid = $row->productid;
					$products[$i]->productname = $row->productname;
					$products[$i]->price =$row->price;
					$products[$i]->productimage =$row->productimage;
					$products[$i]->productdescription =$row->productdescription;
					$i++;	
					
				}

				return $products;
				
			}	
			
	}
	
	
	function create($formArray)
	{
		$this->db->insert('product',$formArray);
		
		
	}







}