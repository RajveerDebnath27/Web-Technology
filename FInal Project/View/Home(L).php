<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

<div>
        <?php include '../View/Header(L).php';?>                
 </div>

<body>


	<h2 align="left">
<?php
session_start();
if(empty($_SESSION["username"]) )
{
	header("location: ../Controller/Login.php");
}
	//echo $_SESSION["username"];
?>

<?php
$cookie_name="Seller"; $cookie_value="Visited"; setcookie($cookie_name, $cookie_value,time() + 86400, "/"); 
//if(isset($_COOKIE[$cookie_name])) { echo "Welcome ".$cookie_name; } else { echo "Welcome ".$cookie_name; }
if(isset($_SESSION["username"])) { echo "Welcome ".$_SESSION["username"]; } else { echo "Welcome ".$_SESSION["username"]; }
?>
</h2>
	
	<div class="container" style="width:1900px;" >
		<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>" novalidate>
		
			
		




			
			  

			<p style="font-size: 30px;" align='center'><b>Welcome to  Dream House!!! </b></p>
			<!-- <div style="height: 100px;" align="center">
				<p style="font-size: 30px;"><b>Welcome to  Dream House!!! </b></p>
			</div>  -->

			<p align="center">
				<img src="../House_logo.png" width="250px" >
			</p>

			<h2>
			<div align="Center">
				<a href="../Model/Seller.php"> Dashboard </a> 
			</div>
			</h2>

			<br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br>
			
			

			<div align="center">
				
				
				<?php include 'Footer.php';?>
			</div>			
			
		</form>
	</div>

</body>
</div>
</div>
</html>