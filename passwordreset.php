<?php
/* The password reset form, the link to this page is included
   from the forgot.php email message
*/
require 'db.php';


// Make sure email and hash variables aren't empty
if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['token']) && !empty($_GET['token']) )
{
    $email = mysqli_real_escape_string($conn,$_GET['email']); 
    $token = mysqli_real_escape_string($conn,$_GET['token']); 

    // Make sure user email with matching hash exist
    $sql= "SELECT * FROM test_driverdb WHERE email='$email' AND token='$token'" ;
	$result = ($conn->query($sql));

    if ( $result->num_rows == 0 )
    { 
        $_SESSION['message'] = "You have entered invalid URL for password reset!";
        header("location: errorpasswordreset.php");
    }
}
else { if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    // Make sure the two passwords match
    if ( $_POST['password'] == $_POST['confirmpassword'] ) { 

        $password = "password" ;
		$password = mysqli_real_escape_string($conn, password_hash($_POST['password'], PASSWORD_BCRYPT));			
		
        
        // We get $_POST['email'] and $_POST['hash'] from the hidden input field of reset.php form
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $token = mysqli_real_escape_string($conn,$_POST['token']);
        
        $sql = "UPDATE test_driverdb SET password='$password', token='$token' WHERE email='$email'";

        if ( $conn->query($sql) ) {

        $_SESSION['message'] = "Your password has been reset successfully!";
        header("location: success.php");    

        }

    }
    else {
        $_SESSION['message'] = "Two passwords you entered don't match, try again!";
        header("location: errorpasswordreset.php");    
    }
  } 
}
?>
