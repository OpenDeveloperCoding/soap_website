
    <!-----------Section 1 in css-------------->
    <section>
          <div class="container text-center">
            <div class="row">
              <div class="col-lg-12 d-flex justify-content-center">
                <div class="card text-center" style="width: 22rem">
                  <div class="card-body">
                    <form>

                      <div class="form-group">
                        <label for="name">Your First name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="name"
						  required
                        />
                      </div>
					  
					  
					  <div class="form-group">
                        <label for="name">Your Surname</label>
                        <input
                          type="text"
                          class="form-control"
                          id="name"
						  required
                        />
                      </div>

                      <div class="form-group">
                        <label for="phone">Mobile number</label>
                        <input
                          type="tel"
                          class="form-control"
                          id="phone"
						  required
                        />
                      </div>					
					
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input
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

                      <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
			
            <div class="row">
				<div class="col-lg-12 justify-content-center">				
					<p class="form-text text-muted">Already have an account?</p>				
				</div>			
				<div class="col-12 justify-content-center">	
					<a href="<?php echo base_url(); ?>index.php/LoginController/index" class="btn btn2">Sign in</a>
				</div>					
			</div>		
          </div>
    </section>
    <br />

