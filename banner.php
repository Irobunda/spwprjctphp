
   <?php        

       if(isset($_SESSION["loggedin"]) === true) :   
		  echo '   <div class="col-lg-4  col-md-6 header-right">
							<h2 class="pb-30 "> POPULAR ROUTES</h2>
							   
								<h4> Dublin - Meath </h4>
								<h4> Dublin - Kilcock </h4>
								<h4> Dublin - Kildare  </h4>
								<h4> Dublin - Carvan </h4>
								<h4> Dublin - Carlow </h4>
								<h4> Dublin - Clare </h4>
								<h4> Meath - Dublin </h4>
								<h4> Kildare - Dublin </h4>
								<h4> Carvan - Dublin </h4>
								<h4> Carlow - Dublin </h4>
								<h4> Kilcock - Dublin </h4>
								<h4> Clare - CMS </h4>
								<h4> Airport shuttle </h4><br>
								<h4> click <a href = "routes.php">here </a>to view complete routes list. </h4>' ;
								
           else:
				header( "location: index.php" );
			endif;
?>