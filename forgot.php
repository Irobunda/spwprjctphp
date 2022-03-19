<?php include "forgotpassword.php"	;?>

<!DOCTYPE html>
<?php include "header.php";?>	
<br><br><br><br><br>
 
   <div class="container">								   
    <form class="form" action="forgot.php" method="post">
     <div class="form-group">  
	 <h4>Enter your email address</h4><br>
      <label>Email Address<span class="req">*</span>  </label>   
      <input type="email"required autocomplete="off" name="email"/>
    </div>
    <button type="submit" class="btn btn-primary"/>Reset</button>
    </form>
  </div>
   

  
            <!-- start footer Area -->		
			<footer class="footer-area section-gap">
				 <?php include 'footer.php';?>
			</footer>	
			<?php include 'script.php';?>