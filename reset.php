<?php include "passwordreset.php"	;?>

<?php
/* Displays all successful messages */
session_start();
$_SESSION['message'] = '';
?>
<!DOCTYPE html>
<?php include "header.php";?>
<br><br><br><br><br><br>
   
   

   <div class="container">								   
    <form class="form" action="reset.php" method="post">
     <div class="form-group">  
          <h4>Choose Your New Password</h4><br>       
          <form action="reset_password.php" method="post">              
          <div class="field-wrap">
            <label> New Password</label>          
            <input type="password" required  name="password" autocomplete="off" class="req"/>
          </div>   <br>           
          <div class="field-wrap">
            <label> Confirm New Password</label>     
            <input type="password"required name="confirmpassword" autocomplete="off" class="req"/>
          </div>        
         
		 <!-- This input field is needed, to get the email of the user -->
          <input type="hidden" name="email" value="<?= $email ?>">    
          <input type="hidden" name="token" value="<?= $token ?>">                
          <button class="btn btn-primary"/>Apply</button>
          </form>
    </div>
  </div>  

  
			<footer class="footer-area section-gap">
				 <?php include 'footer.php';?>
			</footer>	
<?php include 'script.php' ?>