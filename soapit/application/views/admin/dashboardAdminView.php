<?php
$loginModel = json_decode($this->session->userdata('loginModel'));

?>


  <!-----------Section 1 in css-------------->
    <section>
      <div class="container-fluid" id="r1">
        <div class="r1t">
          <h1>HELLO</h1>
          <p>Admin <?php echo $loginModel->customerModel->cfname;  ?></p>
        </div>
      </div>
    </section>
    <br /><br /><br />
    <!-----------End of Section 1 in css------------->