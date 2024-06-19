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
			<ul class="navbar-nav text-center">
			
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>index.php/LoginController/index">Home</a>
			  </li>
			  
			  <li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>index.php/NavbarController/adminorderpage">Orders</a>
			  </li>
  
			  <li class="nav-item dropdown">
				<a
				  class="nav-link dropdown-toggle"
				  href="#"
				  id="navbarDropdownMenuLink"
				  role="button"
				  data-toggle="dropdown"
				  aria-haspopup="true"
				  aria-expanded="false"
				>
				  Product
				</a>
				<div
				  class="dropdown-menu"
				  aria-labelledby="navbarDropdownMenuLink"
				>
				  <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/NavbarController/addpage">Add</a>
				  <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/NavbarController/updatepage">Update/Delete</a>
				</div>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>index.php/LoginController/logout">Logout</a>
			  </li>
  

			</ul>
		  </div>
		</nav>
	  </header>
    <!-----------End of navigation bar-------------->