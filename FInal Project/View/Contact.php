<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Info</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>

			<div>
        	<?php include '../View/Header(L).php';?>                
    		</div>
		<h2><?php
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
	          <div align="center">
		<fieldset>
			<form>
            <p style="font-size: 25px;" align='center'><b>Contact Info</b> </p>
				<div>
					<table>
						<tr>
							

							<td>
                            <div class="container" style="width:500px;">              
                <div class="table-responsive" > 
                     <table class="table table-bordered" border="1px">  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th> 
                               <th>Mobile No</th> 
                              
                          </tr>  
                          <tr>
                              <td><?php echo $row["name"]?></td>
                               <td><?php echo $row["email"]?></td>
                               <td><?php echo $row["password"]?></td>
                               
                          </tr>
                                
                          
                          
                     </table>  <br>
					 
                   </div>
                 </div>
							</td>
						</tr>
					</table>
                    
				</div>
			</form>
		</fieldset>
	</div>
	<div align="center">
                <br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br>
                <br><br>
                
                <?php include '../View/Footer.php';?>
            </div>
</body>
</html>