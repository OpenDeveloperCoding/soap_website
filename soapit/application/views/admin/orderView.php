<?php

$loginModel = json_decode($this->session->userdata('loginModel'));
?>

<!-- partial:index.partial.html -->
	<div class="wrapper">
		<div class="table">
		
			<div class="row header green">
				<div class="cell">
					Customer Name
				</div>
				<div class="cell">
					Product
				</div>
				<div class="cell">
					Totalcost
				</div>
				<div class="cell">
					Quantity
				</div>
				<div class="cell">
					Purchase Date
				</div>
				<div class="cell">
					Status
				</div>
			</div>
			
	<?php
		foreach($loginModel->customerModel->ordersModel as $ordersModel)
		{
	?>		
		
			<div class="row">
				<div class="cell" data-title="Customer Name">
					<?php	echo $ordersModel->cfname ?> <?php	echo $ordersModel->csname ?>
				</div>
				  <div class="cell" data-title="Product">
					<?php	echo $ordersModel->productname ?>
				  </div>
				  <div class="cell" data-title="Unit Price">
					Rs <?php	echo $ordersModel->totalcost ?>
				  </div>
				  <div class="cell" data-title="Quantity">
					<?php	echo $ordersModel->quantity ?>
				  </div>
				  <div class="cell" data-title="Date Sold">
					<?php	echo $ordersModel->date ?>
				  </div>
				  <div class="cell" data-title="Status">
					<?php	echo $ordersModel->status ?>
				  </div>
			</div>
			
	<?php
		}
	?>	
			
		</div>
	</div>
  

<!-- end -->