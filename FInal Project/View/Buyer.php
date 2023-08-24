<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buyer</title>
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
		<?php include 'Header(L).php';?>				
	</div>	

	<br>

	<div align="center">
		<fieldset>
			<form>
            <p style="font-size: 25px;" align='center'><b>Buyers Info</b> </p>
				<div>
					<table>
						<tr>
							

							<td>
                            <div class="container" style="width:1200px;">              
                <div class="table-responsive" > 
                     <table class="table table-bordered" border="1px">  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th> 
                               <th>Mobile No</th> 
                               <th>User Name</th>   
                               <th>Address</th>   
                               <th>Gender</th>
                               <th>Date of Birth</th>
                          </tr>  
                          <?php   
                          $data = file_get_contents("../buyer.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {   
                              echo '<tr>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["mobilenumber"].'</td>
                               <td>'.$row["username"].'</td>
                               <td>'.$row["address"].'</td>
                               <td>'.$row["gender"].'</td>
                               <td>'.$row["dob"].'</td>
                               </tr>'; 
                                
                          }  
                          ?>  
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

	<br>

	<div align="center">
		<br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br>
		
		<br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br>
		<?php include 'Footer.php';?>
	</div>

</body>
</div>
</div>
</html>