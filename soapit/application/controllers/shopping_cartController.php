<?php

class Shopping_cartController extends CI_Controller {

    function __construct() {
        parent::__construct();

    }
	
	function index()
	{
		
		$this->load->model("shopping_cart_model");
		$data["product"] = $this->shopping_cart_model->fetch_all();
		$this->load->view("shopping_cartView", $data);
		

		
	}
	function productpage()
	{
		
		$this->load->model("shopping_cart_model");
		$data["product"] = $this->shopping_cart_model->fetch_all();
		$this->load->view("productView", $data);
		
	}
	
	
	
	
	
		function add()
		{
			  $this->load->library("cart");
			  $data = array(
			   "id"  => $_POST["product_id"],
			   "name"  => $_POST["product_name"],
			   "qty"  => $_POST["quantity"],
			   "price"  => $_POST["product_price"]
			  );
			  $this->cart->insert($data); //return rowid 
			  echo $this->view();
		}

		function load()
		{
		  echo $this->view();
		}

		function remove()
		{
			  $this->load->library("cart");
			  $row_id = $_POST["row_id"];
			  $data = array(
			   'rowid'  => $row_id,
			   'qty'  => 0
			  );
			  $this->cart->update($data);
			  echo $this->view();
		}

		function clear()
		{
		  $this->load->library("cart");
		  $this->cart->destroy();
		  echo $this->view();
		}
		 
		function view()
		{
			  $this->load->library("cart");
			  $output = '';
			  $output .= '
			  <h3>Shopping Cart</h3><br />
			  <div class="table-responsive">
			   <div align="right">
				<button type="button" id="clear_cart" class="btn btn-warning">Clear Cart</button>
			   </div>
			   <br />
			   <table class="table table-bordered">
				<tr>
				 <th width="40%">Name</th>
				 <th width="15%">Quantity</th>
				 <th width="15%">Price</th>
				 <th width="15%">Total</th>
				 <th width="15%">Action</th>
				</tr>

			  ';
			  $count = 0;
			  foreach($this->cart->contents() as $items)
			  {
			   $count++;
			   $output .= '
			   <tr> 
				<td>'.$items["name"].'</td>
				<td>'.$items["qty"].'</td>
				<td>'.$items["price"].'</td>
				<td>'.$items["subtotal"].'</td>
				<td><button type="button" name="remove" class="btn btn-danger btn-xs remove_inventory" id="'.$items["rowid"].'">Remove</button></td>
			   </tr>
			   ';
			  }
			  $output .= '
			   <tr>
				<td colspan="4" align="right">Total</td>
				<td>'.$this->cart->total().'</td>
			   </tr>
			  </table>

			  </div>
			  ';

			  $output .= '
			  <a href="Shopping_cartController/placeorder" name="" class="btn btn-danger">Place Order</a>
			  <a href="Shopping_cartController/vieworder" name="" class="btn btn-danger">View Order</a>
			';
			
			  if($count == 0)
			  {
			   $output = '<h3 align="center">Cart is Empty</h3><br/>
						<p style="text-align:center;"><a href="Shopping_cartController/vieworder" name="" class="btn btn-danger">View Order</a></p>
			   ';
			  }
				return $output;
		}
		
		
		function placeorder()
		{
		$loginModelJ = $this->session->userdata('loginModel');
		$loginModel =  json_decode($loginModelJ);	
		$customer = $loginModel->customerModel;
		
		$ordersModel = $loginModel->customerModel->ordersModel;
		
			
		 $this->load->library("cart");
		 $formArray = array();
		 $count = 0;
			foreach($this->cart->contents() as $items)
			  {
				$formArray[$count] = new OrdersModel();
				$formArray[$count]->productid = $items["id"];
				$formArray[$count]->productname = $items["name"];
				$formArray[$count]->customerid = $customer->customerid;
				$formArray[$count]->quantity = $items["qty"];
				$formArray[$count]->totalcost = $items["subtotal"];
				$formArray[$count]->date = "Logout and Login To View";
				$formArray[$count]->status = "Logout and Login To View";
				
				$sql = "insert into orders(customerid,payment_type,status,productid,quantity,totalcost,date) values (?,'paypal','paid',?,?,?,CURRENT_DATE())";
				$query = $this->db->query($sql,array($formArray[$count]->customerid,$formArray[$count]->productid,$formArray[$count]->quantity,$formArray[$count]->totalcost));
				array_push($ordersModel,$formArray[$count]);
				$count++;
			  }
		
		
		
		$loginModel->customerModel->ordersModel = $ordersModel;
		$customer = $loginModel->customerModel;
		
		$loginModelJ = json_encode($loginModel);
		$this->session->set_userdata("loginModel",$loginModelJ);	
			
		$this->load->library("cart");
		$this->cart->destroy();			
			
			$this->load->view("orderView");

		}
	
		function vieworder()
		{
			
			$this->load->view("orderView");
		}

	
	



}

?>