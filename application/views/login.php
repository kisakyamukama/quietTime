<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/forms.css">		
	<title>Welcome</title>
	<!-- <meta http-equiv="refresh" content="3"> -->
</head>
<body>
	<div class="container">
					<div class="jumbotron" id="header" onclick="show(0)"> 
						<h4 class="page-header" onclick="show(0)" >Qt</h4>
					</div>

					<button class="btn btn-lg btn-block" onclick="show(0)">Home</button>
					<h3 class="btn btn-block btn-info" id="access_login" onclick="show('login')">Login</h3>
					<h3 class="btn btn-block btn-success" onclick="show('signup')">Sign Up</h3>

					
					<!-- 


															LOGIN FORM  


				     -->
					<span class="err" style="text-align:center"><?php echo isset($error) ? $error : '' ?></span>
					<div id="login" class="offset-2">
						<form class="form-inline" method="post"  action="<?php echo base_url();?>index.php/Qt_controller/signin">
							<div class="form-group mx-sm-1 mb-2">
								<label for="username" class="sr-only">Username</label>
								<input type="text"  class="form-control" name="uname" placeholder="Enter username">
							</div>
							<div class="form-group mx-sm-1 mb-2">
								<label for="password" class="sr-only">Password</label>
								<input type="password" class="form-control"   name="pass" placeholder="Enter password">
							</div>				
							<div class="form-group mb-2">
								
									<button type="submit" class="btn btn-primary">Access your account</button>
							</div>								
						</form>

					</div>
						<?php  //echo validation_errors(); ?>

						<?php echo "<span class='error'> ". validation_errors(). "</span>"; ?>

					<span class="err" style="text-align:center"><?php echo isset($form) ? $form : '' ?></span>

			
			
			<!-- 
					
				
				REGISTRATION FORM
			
			
			
			-->

				                <div id="signup">	
					                    <form  method="post" action="<?php echo  base_url();?>index.php/qt_controller/add_user"  class="needs-validation"  novalidate>
					
												<div class="form-row">
													<div class="col-md-4 mb-3">
														<label for="validationCustom01">First name</label>
														<input type="text" class="form-control" id="validationCustom01" name="fname" placeholder="First name" required>
														<div class="valid-feedback">Looks good</div>
													</div>
													<div class="col-md-4 mb-3">
														<label for="validationCustom02">Last name</label>
														<input type="text" class="form-control" id="validationCustom02" name="lname" placeholder="First name" required>
														<div class="valid-feedback">Looks good</div>
													</div>
													<div class="col-md-4 mb-3">
														<label for="validationCustomUsername">Username</label>
														<div class="input-group">
															<div class="input-group-prepend">
																<span class="input-group-text" id="inputGroupPrepend">@</span>
															</div>
															<input type="text" class="form-control" id="validationCustomUsername" name="uname" aria-describedby="inputGroupPrepend" placeholder="Username" required>
														</div>
													</div>
												</div>
												
												<div class="form-row">
														<div class="col-md-4 mb-3">
															<label for="validationCustom03">Gender</label>
															<div class="input-group">
																<select class="custom-select" name="gender" class="form-control" id="validationCustom03" required>
																		<option value=""> Select your gender...</option>
																		<option value="M">Male</option>
																		<option value="F">Female</option>
																</select>
															</div>
														</div>

														<div class="col-md-4 mb-3">
															<label for="validationCustom04">Residence</label>
															<input type="text" class="form-control" id="validationCustom04" name="residence" placeholder="Residence" required>
															<div class="invalid-feedback">Please provide a valid place.</div>
														</div>							
														<div class="col-md-3 mb-3">
															<label for="validationCustom05">Zip</label>
															<input type="number" class="form-control" id="validationCustom05" name="zip" placeholder="Zip" required>
															<div class="invalid-feedback">Please provide a valid zip.</div>
														</div>
												</div>
												<div class="form-row">
														<div class="col-md-4 mb-3">
															<label for="validationCustom06">Password</label>
																<input type="password" class="form-control" id="validationCustom06" name="pwd" placeholder="password" required>
																<div class="invalid-feedback">Please enter a valid password</div>
														</div>							
														<div class="col-md-3 mb-3">
															<label for="validationCustom07">Confirm password</label>
															<input type="password" class="form-control" id="validationCustom07" name="cpwd" placeholder="confirm your password" required>
															<div class="invalid-feedback">Please re-enter your password.</div>
														</div>
												</div>						
												<div class="form-group">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
														<label for="invalidCheck" class="form-check-label">Agree to terms and conditions</label>
														<div class="invalid-feedback">You must agree before submitting</div>
													</div>
												</div>
												<button class="btn btn-primary" type="submit">Submit form</button>
					                    </form>
				                 </div>



			<!--
					
				
				
				SCRIPTS
			
			
			-->
	<script>
			function show(div){
					switch(div){          
								case 'login':
									document.getElementById("login").style.visibility = 'visible';
									document.getElementById("signup").style.visibility = 'hidden';
									break;
								case 'signup':
									document.getElementById("login").style.visibility = 'hidden';
									document.getElementById("signup").style.visibility = 'visible';
									break;
								default:
									document.getElementById("login").style.visibility = 'hidden';
									document.getElementById("signup").style.visibility = 'hidden';
									break;
						  }
			}

	</script>


   <script>
				//form validation
				(function(){
					'use strict';
					window.addEventListener('load', function(){
						//fetch all the forms we want to apply custom Bootstrap validation style to
						var forms = document.getElementsByClassName('needs-validation');

						// Loop over them and prevent submission
						var validation = Array.prototype.filter.call(forms, function(form) {
							form.addEventListener('submit', function(event){
								if(form.checkValidity() ===false){
									event.preventDefault();
									event.stopPropagation();
								}
								form.classList.add('was-validated');
							}, false);
						});
					}, false);
				})();

	</script>
</body>
</html>

