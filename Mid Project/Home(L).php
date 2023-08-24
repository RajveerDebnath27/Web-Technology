<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

	<div class="container">
		<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>" novalidate>

			<div>
				<?php include '../Mid Project/Header(L).php';?>				
			</div>

			<h2>
			<?php
			session_start();
			if(empty($_SESSION["username"]) )
			{
    			header("location: ../Mid%20Project/Login.php");
			}
				//echo $_SESSION["username"];
			?>

			<?php
			$cookie_name="Seller"; $cookie_value="Visited"; setcookie($cookie_name, $cookie_value,time() + 86400, "/"); 
			//if(isset($_COOKIE[$cookie_name])) { echo "Welcome ".$cookie_name; } else { echo "Welcome ".$cookie_name; }
			if(isset($_SESSION["username"])) { echo "Welcome ".$_SESSION["username"]; } else { echo "Welcome ".$_SESSION["username"]; }
			?>
			</h2>


			
			  

			<p style="font-size: 30px;" align='center'><b>Welcome to  Dream House!!! </b></p>
			<!-- <div style="height: 100px;" align="center">
				<p style="font-size: 30px;"><b>Welcome to  Dream House!!! </b></p>
			</div>  -->

			<p align="center">
				<img src="House_logo.png" width="250px" >
			</p>

			<h2>
			<div align="Center">
				<a href="/Mid Project/Seller.php"> Dashboard </a> 
			</div>
			</h2>

			<br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br>
			
			

			<div align="center">
				
				
				<?php include '../Mid Project/Footer.php';?>
			</div>			
			
		</form>
	</div>

</body>
</html>