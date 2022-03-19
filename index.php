<?php 
session_start();
$_SESSION['message'] = "";

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset();     
    session_destroy(); 
}
$_SESSION['LAST_ACTIVITY'] = time(); 
?>
      

<!DOCTYPE html>
<?php include "header.php";
?>	
<br>

			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">

					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-6 col-md-6 "><br>					
						<?php if(isset($_SESSION["loggedin"]) === true) : ?> 
						Welcome,  <span class='user' style="color:red;"><?php echo $_SESSION['username'] ?></span>
						<p><a href=logout.php style="color:red;">Logout</a></p>
						<?php endif ?><br>
							<h1 class="text">899 IrlTrvl </h1>
							<p class="pt-10 pb-10 text-white">Lets meet at the closest busstop to you</p>
						</div>
								<?php if(isset($_SESSION["loggedin"])){include "banner.php";} ?>				
						</div>											
					</div>
				</div>					
			</section>


			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-5 about-left">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-7 about-right">
							<h1>Go literally everywhere..From anywhere..</h1>
							<h4>Where do you want a ride to?</h4>
							<p>Just put in your location and destination and let us do the rest.
							</p>
					<a class="text-uppercase primary-btn" href="signupform.php">Get Connected</a>
						</div>
					</div>
				</div>	
			</section>			


			<?php include 'service.php'; ?>
		    <?php include 'experience.php';?>		
			<footer class="footer-area section-gap">
			 <?php include 'footer.php';?>	
			</footer>	
				 <?php include 'script.php';?>	