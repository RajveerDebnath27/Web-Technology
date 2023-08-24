<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>For Rent Appartment</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="../View/js/AJAX2.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

	<div>
		<?php include '../View/Header(L).php';?>				
	</div>	

	<br>

	<div align="center">
		<fieldset>
			<form>
            <p style="font-size: 25px;" align='center'><b>For Rent Appartment Details</b> </p>
            <h2 align="center"></h2><br />
   					<div class="form-group">
    				<div class="input-group">
     				<span class="input-group-addon">Search</span>
     				<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" autocomplete="off" /><br />
    				</div>
    				</div>
    				<br />
   <div id="result"></div>
				<div>
					<table>
						<tr>
							
							<td>
                            <div class="container" style="width:1200px;">              
                <div align="center" class="table-responsive" > 
                     <table class="table table-bordered" border="1px">  

                          <?php   
                          /*$data = file_get_contents("../test.json");  
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
                                
                          }*/  
                          ?> 
                          <?php
					//fetch.php
					$connect = mysqli_connect("localhost", "root", "", "sale");
					$output = '';
					// if(isset($_POST["query"]))
					// {
 				// 	$search = mysqli_real_escape_string($connect, $_POST["query"]);
 				// 	$query = "
  			// 		SELECT * FROM sale 
 				// 	WHERE CustomerName LIKE '%".$search."%'
  			// 		OR ID LIKE '%".$search."%' 
  			// 		OR Name '%".$search."%' 
  			// 		OR Price LIKE '%".$search."%' 
  			// 		OR email LIKE '%".$search."%'
  			// 		OR phone LIKE '%".$search."%'
  			// 		OR Location LIKE '%".$search."%'
  			// 		OR apartment LIKE '%".$search."%'
					// ";
					
					// //else
					// //{
 					$query = "
  					SELECT * FROM rent ORDER BY ID
 					";
					//}
					$result = mysqli_query($connect, $query);
					if(mysqli_num_rows($result) > 0)
					{
 					$output .= '
  					<div class="table-responsive">
   					<table class="table table bordered">
    					<tr>
     				<th>ID</th>
     				<th>Name</th>
     				<th>Price</th>
     				<th>email</th>
     				<th>phone</th>
     				<th>Location</th>
     				<br>
     				<th>apartment</th>
    					</tr>
 					';
 					while($row = mysqli_fetch_array($result))
 					{
  					$output .= '

										<tr>
    										<td>'.$row["ID"].'</td>
                         <td>'.$row["Name"].'</td>
                         <td>'.$row["Price"].'</td>
                         <td>'.$row["email"].'</td>
                         <td>'.$row["phone"].'</td>
                     		<td>'.$row["Location"].'</td>

                         <td>'.$row["apartment"].'</td>
   									</tr>
  					';
 					

 					/*foreach($output as $row)  
                          {   
                              echo '<tr>
                               <td>'.$row["ID"].'</td>
                               <td>'.$row["Name"].'</td>
                               <td>'.$row["Price"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["phone"].'</td>
                               <td>'.$row["Location"].'</td>
                               <td>'.$row["apartment"].'</td>
                               </tr>'; 
                                
                          }*/ 
                          } 

 						echo $output;
					}
					//}
					else
					{
 						echo 'Data Not Found';
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
		<?php include '../View/Footer.php';?>
	</div>
</body>
</html>



