<?php include 'log-in.php';?>
 <!DOCTYPE html>
<?php include "header.php";?>	
<br><br><br><br><br><br>


<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">            
		<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">      
		<h2>Login</h2><br>
        <p>Please fill in your credentials to login.</p>               
			   <label>Username</label>
                <input type="tet" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
				<br><br>
					<p>Forgot Password? <a href="forgot.php">Click here</a>.</p>

            </div>
        </form>
    </div>
 <br><br><br>			  
			  

			 			
			<footer class="footer-area section-gap">
				 <?php include 'footer.php';?>
				<img class="footer-bottom" src="img/footer-bottom.png" alt="">
			</footer>	
			<?php include 'script.php'; ?>