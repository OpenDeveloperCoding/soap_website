<?php

class OrdersModel extends CI_Model{

	public $orderid;
    public $customerid;	
	public $payment_type;
	public $status;	
	public $productid;
    public $quantity;
	public $totalcost;
	public $date;
	public $cfname;
	public $csname;
	public $productname;
	
	


	function getOrder($email)
	{
		$ordersModel = new OrdersModel();
		$orders = array();
		$sql = "SELECT * from orders o,customer c,product p where o.customerid=c.customerid and o.productid=p.productid and c.email=?";
		$query = $this->db->query($sql,array($email));
		$i=0;
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					
					$orders[$i] = new OrdersModel();
					$orders[$i]->orderid = $row->orderid;
					$orders[$i]->status = $row->status;
					$orders[$i]->payment_type = $row->payment_type;
					$orders[$i]->quantity = $row->quantity;
					$orders[$i]->totalcost =$row->totalcost;
					$orders[$i]->productname =$row->productname;
					$orders[$i]->date =$row->date;
					$i++;	
					
				}

				return $orders;
				
			}
			else
			{
				return null;
			}
			
	}
	
	
	
	
	public function getAllOrder()
	{
		
		$ordersModel = new OrdersModel();
		$orders = array();
		$sql = "SELECT * from orders o,customer c,product p where o.customerid=c.customerid and o.productid=p.productid";
		$query = $this->db->query($sql);
		$i=0;
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					
					$orders[$i] = new OrdersModel();
					$orders[$i]->customerid =$row->customerid;
					$orders[$i]->productid =$row->productid;
					$orders[$i]->cfname =$row->cfname;
					$orders[$i]->csname =$row->csname;
					$orders[$i]->orderid = $row->orderid;
					$orders[$i]->status = $row->status;
					$orders[$i]->payment_type = $row->payment_type;
					$orders[$i]->quantity = $row->quantity;
					$orders[$i]->totalcost =$row->totalcost;
					$orders[$i]->productname =$row->productname;
					$orders[$i]->date =$row->date;
					$i++;	
					
				}

				return $orders;
				
			}
			else
			{
				return null;
			}
		
	}




}