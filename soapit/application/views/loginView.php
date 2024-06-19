   <section>
          <div class="container text-center">
            <div class="row">
              <div class="col-lg-12 d-flex justify-content-center">
                <div class="card text-center" style="width: 22rem">
                  <div class="card-body">
                    <form action="<?php echo base_url(); ?>index.php/LoginController/login" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input
							name="email"
                          type="email"
                          class="form-control"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
						  required
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input
							name="password"
                          type="password"
                          class="form-control"
                          id="exampleInputPassword1"
						  required
                        />
                        <small id="emailHelp" class="form-text text-muted"
                          >By continuing, you agree to Soapit's Conditions of
                          Use and Privacy Notice.</small
                        >
                      </div>

                      <button type="submit" class="btn btn-primary">login</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
			
            <div class="row">
				<div class="col-lg-12 justify-content-center">
					
					<p class="form-text text-muted">NEW TO SoapIt?</p>
					
				</div>
				
				<div class="col-12 justify-content-center">
					
					<a href="<?php echo base_url(); ?>index.php/LoginController/register" class="btn btn2">Create your SoapIt account</a>
					
					<?php
			if($error1!="")
			{
		?>
				<br/>
				<div class="alert alert-danger" role="alert">
					<?php echo $error1; ?>
				</div>
		<?php
			}
		?>
					
					
					
					
					

				</div>				
				
			</div>
			
			
			
          </div>
    </section>
    <br />
