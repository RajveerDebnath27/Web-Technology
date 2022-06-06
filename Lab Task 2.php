<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<style>
		#filename {
			position: relative;
			top: 20px;
			left: 300px;
			font-weight: bolder;
		}
	</style>
</head>
<body>

	<?php 

	$firstname = $lastname = $gender = $email = $mobileno = $address1= "";
	$firstnameErrMsg = "";
	$lastnameErrMsg = "";
	$genderErrMsg = "";
	$emailErrMsg = "";
	$mobilenoErrMsg = "";
	$address1ErrMsg = "";

		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test_input($data) {
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

		$firstname = test_input($_POST['firstname']);
		$lastname = test_input($_POST['lastname']);
		$gender = isset($_POST['gender']) ? test_input($_POST['gender']) : NULL;
		$email = test_input($_POST['email']);
		$mobileno = test_input($_POST['mobileno']);
		$address1 = test_input($_POST['address1']);
		$country = isset($_POST['country']) ? test_input($_POST['country']) : NULL;

		$message = "";
		if (empty($firstname)) {

			$firstnameErrMsg = "First Name is Empty";
		}
		else {
			if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
			

				$firstnameErrMsg = "Only letters and spaces";
			}
		}
		
		
		
		$message = "";
		if (empty($lastname)) {

			$lastnameErrMsg = "Last Name is Empty";
		}
		else {
			if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
			

				$lastnameErrMsg = "Only letters and spaces";
			}
		}
		
		$message = "";
		if (empty($gender)) {
			
			$genderErrMsg = "" ;
			
		}
		else {
			 $genderErrMsg = "Gender not Selected";
		}
			

		
		
		$message = "";
		if (empty($email)) {

			$emailErrMsg = "Email is Empty";
		}
		else {
			if (!preg_match("/^[@._a-z0-9-' ]*$/",$email)) {
			

				$emailErrMsg = "Invalid Email ID";
			}
		}

		$message = "";
		if (empty($mobileno)) {

			$mobilenoErrMsg = "Mobile No. is Empty";
		}
		else {
			if (!preg_match("/^[+_0-9-' ]*$/",$mobileno)) {
			

				$mobilenoErrMsg = "Invalid Mobile No.";
			}
		}
		
		$message = "";
		if (empty($address1)) {

			$address1ErrMsg = "Street/House/Road is Empty";
		}
		else {
			if (!preg_match("/^[#*()~'-,+_a-zA-Z0-9-' ]*$/",$address1)) {
			

				$address1ErrMsg = "Invalid Address";
			}
		}


		if (!isset($country) or empty($country)) {
			$message .= "Country not Seletect";
			$message .= "<br>";
		}

		if ($message === "") {
			echo "Registration Successful";
		}
		else {
			echo "Registration Unsuccessful";
		}
	}
?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
		<fieldset>
			<legend>General</legend>

			<label for="fname">First Name</label>
			<input type="text" name="firstname" id="fname" value="<?php echo $firstname; ?>">
			<span style="color: red"><?php echo $firstnameErrMsg; ?></span>

			<br><br>

			
			<label for="lastname">Last Name</label>
			<input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>">
			<span style="color: red"><?php echo $lastnameErrMsg; ?></span>

			<br><br>

			

			<label>Gender</label>
			<input type="radio" name="gender" id="male" value="<?php echo $gender; ?>">
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female" value="<?php echo $gender; ?>">
			<label for="male">female</label>
			<span style="color: red"><?php echo $genderErrMsg; ?></span>
			
			<br><br>

			<p id="filename">Group_03_19-41512-3</p>

		</fieldset>

		<fieldset>
			<legend>Contact</legend>

			
			<label for="email">Email</label>
			<input type="text" name="email" id="email" value="<?php echo $email; ?>">
			<span style="color: red"><?php echo $emailErrMsg; ?></span>

			<br><br>

			
			<label for="mobileno">Mobile No.</label>
			<input type="text" name="mobileno" id="mobileno" value="<?php echo $mobileno; ?>">
			<span style="color: red"><?php echo $mobilenoErrMsg; ?></span>

			<br><br>

		</fieldset>

		<fieldset>
			<legend>Address</legend>


			<label for="address1">Street/House/Road</label>
			<input type="text" name="address1" id="address1" value="<?php echo $address1; ?>">
			<span style="color: red"><?php echo $address1ErrMsg; ?></span>

			<br><br>

			<label for="country">Country</label>
			<select name="country" id="country">
				<option value="bd">Bangladesh</option>
				<option value="usa">United States of America</option>
			</select>

			<br><br>

		</fieldset>

		<input type="submit" name="submit" value="Register">
	</form>

</body>
</html>