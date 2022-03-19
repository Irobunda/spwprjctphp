<?php 
/* Reset your password form, sends reset.php password link */
require 'db.php';
session_start();
$errors = [];

if ( isset($_POST['email'] )) 
{   
  
    $email =  mysqli_real_escape_string($conn,  $_POST['email']);
	$sql = "SELECT * FROM test_driverdb WHERE email='$email'";
    $result =  mysqli_query($conn, $sql);

    if ( $result->num_rows == 0 ) // User doesn't exist
    {   $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)
	
        $forgot = mysqli_fetch_assoc($result);

		$email = $forgot['email'];
		$token = $forgot['token']; 
		
		
	        $sql ="UPDATE test_driverdb SET token='$token', 
                      active =DATE_ADD(NOW(), INTERVAL 30 MINUTE)
                      WHERE email='$email'
		 ";
				
		
        // Send registration confirmation link (reset.php)
        $to      = $email;
        $headers = "From: nci.projectemail@gmail.com  \r\n";
		$headers .= "Reply-To: nci.projectemail@gmail.com \r\n";    
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        $message = "
	            Hi,<br><br>
	            
	            In order to reset your password, please click on the link below:<br>
	            <a href='
	            http://localhost/projectspw/reset.php?email=$email&token=$token
	            '>click on this link</a><br><br>
	            
	            Kind Regards,<br>
	             Ireland Travel
	        ";

        if ( @mail($to, $email, $message, $headers)){
			$_SESSION['message'] = "<p>Please check your email <span>$email</span>"
             . " for a confirmation link to complete your password reset!</p>";	
	             header("location: success.php");
				 			 
           }
}
}
?>