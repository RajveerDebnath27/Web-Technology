<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forget Password</title>
</head>
<body>
	

	<div>
		<?php include 'Header.php';?>				
	</div>

	<br>
	<center>
	<div align="center" style="width:500px">
		<fieldset>
			<form action="Login.php">
				<p><h2>Forget Password</h2></p>
				<table>
					<tr>
						<td>Enter Email</td>
						<td>:</td>
						<td><input type="text" name="email"></td>
					</tr>
				</table> <br>
				<input type="submit" name="submit">
			</form>			
		</fieldset>		
	</div>
	</center>
	<br>

	<div align="center">
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br>
		<?php include 'Footer.php';?>
	</div>

</body>
</html>