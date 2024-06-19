<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>soapit</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/index.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/footer.css"></link> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  </head>
 <body>
  
  <?php
$loginModel = $this->session->userdata('loginModel'); 
		
?>

    <header>
		<nav
		  class="navbar sticky-top navbar-expand-lg navbar-light"
		  style="background-color: none"
		>
		  <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/LoginController/index"><img src="<?php echo base_url(); ?>images/logo.png" /></a>
		  <button
			class="navbar-toggler"
			type="button"
			data-toggle="collapse"
			data-target="#navbarNav"
			aria-controls="navbarNav"
			aria-expanded="false"
			aria-label="Toggle navigation"
		  >
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div
			class="collapse navbar-collapse justify-content-center"
			id="navbarNav"
		  >
			<ul class="navbar-nav">
			  <li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>index.php/LoginController/index">Home</a>
			  </li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>index.php/Shopping_cartController/productpage">Product</a>
			  </li>

			  <li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>index.php/NavbarController/customizepage">Customize</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>index.php/NavbarController/aboutpage">About</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>index.php/LoginController/logout">Logout</a>
			  </li>
  

			  <li>
				<a href="<?php echo base_url(); ?>index.php/Shopping_cartController">
				  <svg
					width="1.5em"
					height="1.5em"
					viewBox="0 0 16 16"
					class="bi bi-cart3"
					fill="currentColor"
					xmlns="http://www.w3.org/2000/svg"
				  >
					<path
					  fill-rule="evenodd"
					  d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
					/>
				  </svg>
				</a>
			  </li>
			</ul>
		  </div>
		</nav>
	  </header><br/><br/>
    <!-----------End of navigation bar-------------->
	
	
	
	<div id="cart_details">
	</div>
	
	
	
	
	
<br/><br/><br/><br/><br/><br/><br/><br/>

<footer>
		<div class="main-content">
		
			<div class="left box">
				<h2>ABout Us</h2>
				<div class="content">
					 <p>We provide a complete range of handmade soaps, Quality is a must, So we ensure that the soaps we create is beneficial for your health and enriches your skin.</p>
					 <br/>
					<div class="social">
						<a href="#" ><span class="fab fa-facebook socialicon"></span></a>
						<a href="#"><span class="fab fa-twitter socialicon"></span></a>
						<a href="#"><span class="fab fa-instagram socialicon"></span></a>
						<a href="#"><span class="fab fa-youtube socialicon"></span></a>			
					</div>
				</div>
			</div>
			
			<div class="center box">
				<h2>Address</h2>
				<div class="content">
					<div class="place">
						<span class="fas fa-map-marker-alt"></span>
						<span class="text">Pajifond,Margao,Goa</span>
					</div>
					<div class="phone">
						<span class="fas fa-phone-alt"></span>
						<span class="text">9923485768</span>
					</div>
					<div class="email">
						<span class="fas fa-envelope"></span>
						<span class="text">soapit@gmail.com</span>
					</div>
				</div>
			</div>
			
			<div class="right box">
				<h2>Contact Us</h2>
				<div class="content">
					<form action="#">
						<div class="email">
							<div class="text">Email *</div>
							<input type="email" required>
						</div>
						<div class="msg">
							<div class="text">Message *</div>
							<textarea row="2" col="25" required></textarea>
						</div>	
						<div class="btn1">
							<button type="submit" style="color:black;">Send</button>
						</div>						
					</form>	
				</div>
			</div>
		
		</div>
	</footer>

		<!---------------------end of FOOTER-------------------------->

  </body>
</html>
<script>
$(document).ready(function(){
 
 $('.add_cart').click(function(){
  var product_id = $(this).data("productid");
  var product_name = $(this).data("productname");
  var product_price = $(this).data("price");
  var quantity = $('#' + product_id).val();
  if(quantity != '' && quantity > 0)
  {
   $.ajax({
    url:"<?php echo base_url(); ?>index.php/shopping_cartController/add",
    method:"POST",
    data:{product_id:product_id, product_name:product_name, product_price:product_price, quantity:quantity},
    success:function(data)
    {
     alert("Product Added into Cart");
     $('#cart_details').html(data);
     $('#' + product_id).val('');
    }
   });
  }
  else
  {
   alert("Please Enter quantity");
  }
 });

 $('#cart_details').load("<?php echo base_url(); ?>index.php/shopping_cartController/load");

 $(document).on('click', '.remove_inventory', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this?"))
  {
   $.ajax({
    url:"<?php echo base_url(); ?>index.php/shopping_cartController/remove",
    method:"POST",
    data:{row_id:row_id},
    success:function(data)
    {
     alert("Product removed from Cart");
     $('#cart_details').html(data);
    }
   });
  }
  else
  {
   return false;
  }
 });

 $(document).on('click', '#clear_cart', function(){
  if(confirm("Are you sure you want to clear cart?"))
  {
   $.ajax({
    url:"<?php echo base_url(); ?>index.php/shopping_cartController/clear",
    success:function(data)
    {
     alert("Your cart has been clear...");
     $('#cart_details').html(data);
    }
   });
  }
  else
  {
   return false;
  }
 });

});
</script>	