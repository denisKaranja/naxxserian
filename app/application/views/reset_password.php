<!--***SIGN-IN-FORM***-->
 <div class="container">
      <form class="form-signin font-family" method="POST" action="<?php echo base_url();?>main/reset_password" id="login-form-auth">
      		<span class="text text-danger"><?php echo validation_errors(); ?></span>
	      	
	        <h3 class="form-signin-heading visible-desktop"><i class="fa fa-lock"></i>Reset password</h3>
	        Email Address:
	        <i class="fa fa-envelope fa-2x"></i>
	        <input type="text" class="input-block-level" placeholder="Enter Email address" name="email_address" value="<?php echo($this->input->post('id_number')) ?>"/>
	    		
	        <br><br>
	        <div>
	       	<input type="submit" class="btn btn-large btn-danger" value="Reset password">
	        	 <a href="<?php echo base_url();?>main/login" class="footer-text">Back to login</a>
	       </div>
	        
      </form>
      
     
 </div>	
 <!--***END>SIGN-IN-FORM***-->	