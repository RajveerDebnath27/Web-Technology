<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appartment</title>
</head>
<body>

	<div>
		<?php include 'Header(L).php';?>				
	</div>	

	<br>

	<div align="center">
		<fieldset>
			<form>
            <p style="font-size: 25px;" align='center'><b>Appartment Details</b> </p>
				<div>
					<table>
						<tr>
							
							<td>
                            <div class="container" style="width:500px;">              
                <div align="center" class="table-responsive" > 
                     <table class="table table-bordered" border="1px">  
                          <tr>  
                               <th>ID</th> 
                               <th>Price</th> 
                               <th>Location</th> 
                               <th>Appartment</th>   
                               <th>E-mail</th>   
                               <th>Mobile No</th>
                          </tr>  
                          <?php   
                          $data = file_get_contents("test.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {   
                              echo '<tr>
                               <td>'.$row["ID"].'</td>
                               <td>'.$row["Price"].'</td>
                               <td>'.$row["Location"].'</td>
                               <td>'.$row["apartment"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["phone"].'</td>
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
		<br><br><br><br><br>
		<?php include 'Footer.php';?>
	</div>
</body>
</html>