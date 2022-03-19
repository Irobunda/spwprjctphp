<?php
   
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subject= $_POST["subject"];
    

    $to = "irobundauche@gmail.com";
    $headers = "From: " . $email . " \r\n";
	$headers .= "Reply-To: irobundauche@gmail \r\n";    
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

    $message ='<table style="width:100%">
        
        <tr><td>'.$name.' </td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Subject: '.$subject.'</td></tr>
        <tr><td>Message: '.$text.'</td></tr>
        
    </table>';
    
	
	
    if ( @mail($to, $email, $message, $headers))
    {
	
        echo 'Your message has been sent.';
    }else{
        echo 'failed';
    }
	
?>
