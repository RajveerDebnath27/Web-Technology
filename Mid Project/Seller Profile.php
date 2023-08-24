<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Profile</title>
</head>
<body>

	<div>
		<?php include 'Header(L).php';?>				
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
	<br>

	<div>
		<fieldset>
			<form>
				<div>
					<table>
						<tr>
							<td style="width:300px;">
								<label><b>Account</b></label> 
								<hr> <br>
								<ul>
								<li><a href="Seller.php">Dashboard</a></li>
									<li><a href="Seller Profile.php">View Profile</a></li>
									<li><a href="">Update Profile</a></li>
									<li><a href="Cpassword.php">Change Password</a></li>
									
								
								</ul>
							</td>

							<td>
								<fieldset style="width:600px;">
									<legend><h2>Profile</h2></legend>
									<table>
										<?php 
										/*session_start();

										if (isset($_SESSION['username'])) {		

										} else {
											header("location:");
										}*/
									 	?>

									 	<tr>
											<td width="25%">Name: Apurba Debnath</td>
											
										</tr>

										<tr>
											<td width="25%">Email: rajveerdebnath27@gmail.com</td>
											
										</tr>

										<tr>
											<td width="25%">Gender: male
											</td>
											
										</tr>

										<tr>
											<td width="25%">Date of Birth: 2000-07-22</td>
											
										</tr>

										
									</table> <br><hr>
									<a href="">Upadate Profile</a>
								</fieldset>
							</td>
						</tr>
					</table>
				</div>
			</form>
		</fieldset>
	</div>

	<br>

	<div align="center">
		<br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br>
		<br><br><br>
		<?php include 'Footer.php';?>
	</div>
</body>
</html>