<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
</head>
<body>
	
	

	<div>
		<?php include 'Header(L).php';?>				
	</div>	

	<br>

	<div align="center">
		
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<div>
					<table>
						<tr>
						
							<td>
								
								<fieldset>

									<center><legend><h2>Change Password</h2></legend></center>

									<table>

										<tr>
											<td>Current Password</td>
											<td>:</td>
											<td><input type="text" name="currentpassword" value="<?php ?>"><span class="red">*</span></td>
										</tr>

										<tr>
											<td>New Password</td>
											<td>:</td>
											<td><input type="text" name="newpassword" value="<?php ?>"><span class="red">*</span></td>
										</tr>

										<tr>
											<td>Retype New Password</td>
											<td>:</td>
											<td><input type="text" name="retypepassword" value="<?php ?>"><span class="red">*<?php ?></span></td>
										</tr>										
									</table>

									<br>

									<input type="submit" name="submit">

								</fieldset>
								
							</td>
						</tr>
					</table>
				</div>
			</form>
		
	</div>

	<br>

	<div align="center">
		<br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br>
		<?php include 'Footer.php';?>
	</div>
</body>
</html>