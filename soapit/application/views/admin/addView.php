<?php

$loginModel = json_decode($this->session->userdata('loginModel'));

//$product = $updateSubject;
?>

<br/><br/>


  
	
		<div class="container px-lg-5">
		  <div class="row mx-lg-n5">
		  

			<div class="col py-3 px-lg-5 border bg-light">
				

			
				<form action="<?php echo base_url(); ?>index.php/DashboardController/create" method="post">
					<div class="form-group" >
						<label for="exampleInputEmail1">Product id:</label>
						<input type="text" name="productid" class="form-control" value=""  aria-describedby="emailHelp" required>    
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Product Name:</label>
						<input type="text" name="productname" class="form-control" value="" required>
					</div>
					
					<div class="form-group">
						<label for="exampleInputPassword1">Product Description:</label>
						<input type="text" name="productdescription" class="form-control" value="" required>
					</div>
					
					
					
					<div class="form-group">
						<label for="exampleInputPassword1">Product Price:</label>
						<input type="text" name="price" class="form-control" value="" required>
					</div>
					
					
					<div class="form-group">
						<label for="exampleInputPassword1">Product Image (After you have added the image name and its extension here paste your image in "SoapIt/images" folder with the same name)*___ Image-Dimensions: 563*563</label>
						<input type="text" name="productimage" class="form-control" value="" required>
					</div>
					
					
					
					
					
					
					
					
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
		
		
		

				

			</div>

		  </div>
	  
		</div>	

		
		
		<br/><br/><br/><br/>
	
	





<br/><br/>