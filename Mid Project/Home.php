<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

	<div class="container">
		<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>" novalidate>

			<div>
				<?php include '../Mid Project/Header.php';?>				
			</div>
			<p style="font-size: 30px;" align='center'><b>Welcome to  Dream House!!! </b></p>
			<!-- <div style="height: 100px;" align="center">
				<p style="font-size: 30px;"><b>Welcome to  Dream House!!! </b></p>
			</div>  -->

			<p align="center">
				<img src="House_logo.png" width="250px" >
			</p>

			<!--<h1><a href="/Mid Project/View/logout.php">Logout</a></h1>-->

			<div align="center">
				<br><br><br><br><br><br><br><br><br><br><br><br>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<br>
				<?php include '../Mid Project/Footer.php';?>
			</div>			
			
		</form>
	</div>

</body>
</html>