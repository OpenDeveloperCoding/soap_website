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
	  </header>
    <!-----------End of navigation bar-------------->