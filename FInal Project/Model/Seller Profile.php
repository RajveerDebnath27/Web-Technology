<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Profile</title>
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

	<div>
		<?php include '../View/Header(L).php';?>				
	</div>	
	<h2>
	<?php
	session_start();
	if(empty($_SESSION["username"]) )
	{
    	header("location: ../View/Login.php");
	}
		//echo $_SESSION["username"];
	?>

	<?php
	$cookie_name="Seller"; $cookie_value="Visited"; setcookie($cookie_name, $cookie_value,time() + 86400, "/"); 
	//if(isset($_COOKIE[$cookie_name])) { echo "Welcome ".$cookie_name; } else { echo "Welcome ".$cookie_name; }
	if(isset($_SESSION["username"])) { echo "Welcome ".$_SESSION["username"]; } else { echo "Welcome ".$_SESSION["username"]; }
	?>
	</h2>
	<?php

//fetch.php
$connect = mysqli_connect("localhost", "root", "", "reg");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM reg 
  WHERE username='$_SESSION[username]' 
  
 ";
}
else
{
 $query = "
  SELECT * FROM reg WHERE username = '$_SESSION[username]'
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 
 $row = mysqli_fetch_array($result);
 
 
  
 
 //echo $output;
    
}
else
{
 echo 'Data Not Found';

}

?>
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
									<li><a href="../View/Update.php">Update Profile</a></li>
									<li><a href="../View/ChangePass.php">Change Password</a></li>
									
								
								</ul>
							</td>

							<td>
								
								<fieldset style="width: 40%; height: 100%; float: left; position: relative;">
            <legend><b>Profile</b></legend>
            <div class='edit'>
                
            </div>
            <br>
            <table>
                <tr>
                    <td>
                        <label for="name">Name </label>
                    </td>
                    <td>:</td>
                    <td>
                        <?php echo $row['name']; ?>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <label for="email">Email </label>
                    </td>
                    <td>:	</td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <label for="username">Username </label>
                    </td>
                    <td>:</td>
                    <td>
                        <?php echo $row["username"];?>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <label for="password">Password </label>
                    </td>
                    <td>:	</td>
                    <td>
                        <?php echo $row["password"]; ?>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <label for="gender">Gender </label>
                    </td>
                    <td>:</td>
                    <td>
                        <?php echo $row['gender']; ?>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <label for="dob">Date of Birth </label>
                    </td>
                    <td>:</td>
                    <td>
                        <?php echo $row['dob']; ?>
                    </td>
                </tr>
                
            </table>
            <a href="../View/Update.php">Upadate Profile</a>
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
		<?php include '../View/Footer.php';?>
	</div>
</body>
</div>
</div>
</html>


