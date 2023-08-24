<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Apartment For Sale</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	<style>
		#filename {
			position: relative;
			top: 20px;
			left:300px;
			font-weight: bolder;
		}
	</style>
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
        color: Black;
        }

</style>
<div class="hero-image">
<div class="hero-text">
<body>


	<div>
        <?php include '../View/Header(L).php';?>                
    </div>
    <h2><?php
	session_start();
	if(empty($_SESSION["username"]) )
	{
    header("location: ../Controller/Login.php");
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

	<div class="container">
   
   <h2 align="center"></h2><br />
   
  
   
   <div id="result"></div>
  </div>
	
	
    
	<center>

	<?php 

	
	$ID = $Name= $Price = $email = $phone = $Location= $apartment = "";
	//$isValid = true;

	$IDErrMsg = "";
	$priceErrMsg = "";
	$emailErrMsg = "";
	$mobilenoErrMsg = "";
	$address1ErrMsg = "";
	$apartmentErrMsg = "";
	

		/*if ($_SERVER['REQUEST_METHOD'] === "POST") {

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
		
			
			if(filesize("../test.json") == 0)
			{

				$record = array($store);
				$data = $record;


				//echo "Registration Successful";

			}

			else{

				$olddata = json_decode(file_get_contents("../test.json"));

				array_push($olddata, $store);

				$data = $olddata;
			}


			if(!file_put_contents("../test.json", json_encode($data, JSON_PRETTY_PRINT), LOCK_EX)){


				$errormsg = "Record Unsuccessful, Please Try Again";
			}
			

	

		
	}*/
?>


<div class="container" align="center" style="width: 600px;">
	<form style="text-align: center;" method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>" novalidate>
		<center>
		<fieldset>
			<center><legend><h2>Add Apartment For Sale</h2></legend></center>
			


			<label for="ID">ID</label>
			<input style="colour: black" type="text" name="ID" id="ID" value="<?php echo $ID; ?>">
			

			<br><br>


			<label for="Name">Name</label>
			<input style="colour: black" type="text" name="Name" id="Name" value="<?php echo $Name; ?>">
			

			<br><br>


			<label for="Price">Price</label>
			<input style="colour: black" type="text" name="Price" id="Price" value="<?php echo $Price; ?>">
			

			<br><br>


			<label for="Location">Location</label>
			<input style="colour: black" type="text" name="Location" id="Location" value="<?php echo $Location; ?>">
		

			<br><br>

			<label for="apartment">Apartment</label>
			<input style="colour: black" type="text" name="apartment" id="apartment" value="<?php echo $apartment; ?>">
			

			<br><br>

			
		
			
				<label for="email">Email</label>
				<input style="colour: black" type="text" name="email" id="email" value="<?php echo $email; ?>">
				

				<br><br>

			
				<label for="phone">Mobile No.</label>
				<input style="colour: black" type="text" name="phone" id="phone" value="<?php echo $phone; ?>">
				

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
                <?php include '../View/Footer.php';?>
            </div>
</body>
</div>
</div>
<?php
 
                        
if ($_SERVER['REQUEST_METHOD'] === "POST") {                 
   function test_input() {
    $ID= test_input($_POST['ID']);
    $Name= test_input($_POST['Name']);
	$Price= test_input($_POST['Price']);
	$email = test_input($_POST['email']);
	$phone = test_input($_POST['phone']);
	$Location = test_input($_POST['Location']);
	$apartment = test_input($_POST['apartment']);
    }

    $ID= $_POST['ID'];
    $Name= $_POST['Name'];
	$Price= $_POST['Price'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$Location =$_POST['Location'];
	$apartment =$_POST['apartment'];

   

    // Database connection
    $conn = new mysqli('localhost','root','','sale');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO sale1 (ID, Name, Price, email, phone, Location, apartment) values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssssss',$ID , $Name , $Price , $email , $phone , $Location , $apartment );
        $execval = $stmt->execute();


            echo $execval;
            //echo "Registration successfully..."; 

    if (!empty($_POST["ID"]) && !empty($_POST["Name"]) && !empty($_POST["Price"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["Location"]) && !empty($_POST["apartment"]))
            {echo " <center> <h3>Apartment Added</h3> </center>";}


    elseif (empty($_POST["ID"]) || empty($_POST["Name"]) || empty($_POST["Price"]) || empty($_POST["email"]) || empty($_POST["phone"]) || empty($_POST["Location"]) || empty($_POST["apartment"]))
            {echo " <center> <h3>Fill Up the From Properly </h3> </center>";}
        
        $stmt->close();
        $conn->close();
    }
}
?>
</html>

<!-- <script>
        	console.log(<?php echo "talha".$ID ?>);
        </script> -->

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>