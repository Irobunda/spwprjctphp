<?php include 'sign-in.php';?>


	<!DOCTYPE html>
<?php include "header.php";?>	
<br><br><br>
			  
					<form class="form" action="signupform.php" method="post" enctype="multipart/form-data" autocomplete="off">
						
					<div class="container">
					<h2>Sign Up</h2><br>
					<div class="alert alert-error"><?= $_SESSION['message'] ?></div>
					<p>Please fill this form to create an account.</p>

						<div class="form-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Full Name" name="name" required />
							</div>
          				<div class="form-group">
							<input type="text" class="form-control" placeholder="User Name" name="username" autocomplete="false" required />
							</div>
						<div class="form-group">
							<input type="email" class="form-control"autocomplete="off" placeholder="Email" name="email" required />
							</div>
						<div class="form-group">						
						    <input type="text"  class="form-control"autocomplete="off" placeholder="Address" name="address" required />
							</div>
						<div class="form-group">		
							<input id="datepicker2" class="form-control" name="date" placeholder="Date Of Birth" type="tet" required />                           					   
							</div>
						<div class="form-group">
							<input type="password" class="form-control" autocomplete="off" placeholder="Password" name="password" required />
       						</div>
						<div class="form-group">
							<input type="password" class="form-control"autocomplete="off" placeholder="Confirm Password" name="confirmpassword" required />						
							</div><br>
			            <input type="checkbox" name="T&C" required /> I accept the <a href="T&C.php"> terms and condition </a><br><br>
							<div class="form-group">
							<input type="submit" value="Register" name="register" class="btn btn-primary" />			
						    </div>
							<p>Already have an account? <a href="login.php">Login here</a>.</p>
					</form>
				</div> 
				</div>
			        <br><br><br>			  
					        <style>

				


					

			
				</style><br>
			  
				<footer class="footer-area section-gap">
			 <?php include 'footer.php';?>	
			</footer>	
			<?php include 'script.php' ; ?>