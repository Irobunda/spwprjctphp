<?php
session_start();
?>
   <?php        

       if(isset($_SESSION["loggedin"]) === true) :   
				 echo ' <html>
						<head>
						<p>still working on this </p>
						<script>
						function goBack(){
							windows.history.back()
						}
						</script>
						<a href="index.php">Go Back</a>
						</head>
						</html>';
														
           else:
				header( "location: index.php" );
				endif;
?>