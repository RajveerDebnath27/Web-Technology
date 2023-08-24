<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<style>
        body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        }

        .hero-image {
        background-image: url("../View/back.jpg");
        background-color: #cccccc;
        height: 1400px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        }

        .hero-text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        }


        



    </style>
    <div class="hero-image">
	<div class="hero-text">
<body>
	<div align="left">
				<?php include 'Header.php';?>				
			</div>
	<div align="center" class="container">
		<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>" novalidate>

			
			<p style="font-size: 30px;" align='center'><b>Welcome to  Dream House!!! </b></p>
			<!-- <div style="height: 100px;" align="center">
				<p style="font-size: 30px;"><b>Welcome to  Dream House!!! </b></p>
			</div>  -->

			<p align="center">
				<img src="../House_logo.png" width="250px" >
			</p>

			<!--<h1><a href="/Mid Project/View/logout.php">Logout</a></h1>-->

			<div align="left">
				<br><br><br><br><br><br><br><br><br><br><br><br>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<br>
				<?php include 'Footer.php';?>
			</div>			
			
		</form>
	</div>

</body>
</div>
</div>
</html>