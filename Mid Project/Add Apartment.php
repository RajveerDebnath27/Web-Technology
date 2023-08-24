<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Apartment</title>
	<style>
		#filename {
			position: relative;
			top: 20px;
			left:300px;
			font-weight: bolder;
		}
	</style>
</head>
<body>
	
	<div>
        <?php include '../Mid Project/Header(L).php';?>                
    </div>
    <br>
    <h2><?php
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
	<center>

	<?php 

	
	$ID = $Price = $email = $phone = $Location= $apartment = "";
	//$isValid = true;

	$IDErrMsg = "";
	$priceErrMsg = "";
	$emailErrMsg = "";
	$mobilenoErrMsg = "";
	$address1ErrMsg = "";
	$apartmentErrMsg = "";
	

		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test_input($data) {
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		$ID= test_input($_POST['ID']);
		$Price= test_input($_POST['Price']);
		$email = test_input($_POST['email']);
		$phone = test_input($_POST['phone']);
		$Location = test_input($_POST['Location']);
		$apartment = test_input($_POST['apartment']);
		

		$store =array('ID' => $ID,'Price' => $Price, 'email' => $email,'phone' => $phone,'Location' => $Location, 'apartment' => $apartment);
		
			
			if(filesize("test.json") == 0)
			{

				$record = array($store);
				$data = $record;


				//echo "Registration Successful";

			}

			else{

				$olddata = json_decode(file_get_contents("test.json"));

				array_push($olddata, $store);

				$data = $olddata;
			}


			if(!file_put_contents("test.json", json_encode($data, JSON_PRETTY_PRINT), LOCK_EX)){


				$errormsg = "Record Unsuccessful, Please Try Again";
			}
			

	

		
	}
?>
<div class="container" align="center" style="width: 600px;">
	<form style="text-align: center;" method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>" novalidate>
		<center>
		<fieldset>
			<center><legend><h2>Add Apartment</h2></legend></center>
			


			<label for="ID">ID</label>
			<input type="text" name="ID" id="username" value="<?php echo $ID; ?>">
			

			<br><br>


			<label for="Price">Price</label>
			<input type="text" name="Price" id="Price" value="<?php echo $Price; ?>">
			

			<br><br>


			<label for="Location">Location</label>
			<input type="text" name="Location" id="Location" value="<?php echo $Location; ?>">
		

			<br><br>

			<label for="apartment">Apartment</label>
			<input type="text" name="apartment" id="apartment" value="<?php echo $apartment; ?>">
			

			<br><br>

			
			

			
			

			

		

			
				

			
				<label for="email">Email</label>
				<input type="text" name="email" id="email" value="<?php echo $email; ?>">
				

				<br><br>

			
				<label for="phone">Mobile No.</label>
				<input type="text" name="phone" id="phone" value="<?php echo $phone; ?>">
				

				<br><br>

			

			


			<input type="submit" name="submit" value="Add">
			
		</fieldset>
		</center>	

		<center>
       	

    	</center>

	</form>
</div>
</center>
			<div align="center">
                <br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br>
                <br><br>
                <?php include '../Mid Project/Footer.php';?>
            </div>
</body>
</html>
