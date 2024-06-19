<?php

$loginModel = json_decode($this->session->userdata('loginModel'));

//$product = $updateSubject;
?>

<br/><br/>
<?php
foreach($loginModel->customerModel->productModel as $row)
{   echo'
		
		<div class="container px-lg-5">
		  <div class="row mx-lg-n5">
			<div class="col py-0 px-lg-0 border bg-light">
				
				
				<img src="'.base_url().'images/'.$row->productimage.'"  class="img-fluid h-50 w-100" >
			
			
			
			
			</div>
			<div class="col py-3 px-lg-5 border bg-light">
				<h4 class="text-center" style="font-size: 5vh;font-weight: 1000;">'.$row->productname.'</h4></br>
				<p class="text-center" style="font-size: 3vh;font-weight: 600;">
					'.$row->productdescription.'
				</p><br/><br/><br/>
				
				<h2 class="text-center">Rs. '.$row->price.'</h2>
				

			
				
				
				


				
			</div>
		  </div>
		</div>	
		';	
?>		
		<div class="text-center">
					<a class="btn btn-info" style="font-size:2em;" href="<?php echo base_url(); ?>index.php/DashboardController/update/<?php echo $row->productid ?>" >Update</a>
				
					<a class="btn btn-danger" style="font-size:2em;margin-left:2em;" href="<?php echo base_url(); ?>index.php/DashboardController/delete/<?php echo $row->productid ?>" >Delete</a>
				
				
				
				</div>
				
		<br/><br/><br/><br/>
	

	
	
				
<?php	
}
?>



<br/><br/>