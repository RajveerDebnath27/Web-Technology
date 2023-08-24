<html>
<head>
<title>SELLER DASHBOARD</title>
</head>
    <div>
        <?php include '../Mid Project/Header(L).php';?>                
    </div>



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
            <p align="center">
                <img src="House_logo.png" width="250px" >
            </p>
    </center>

<body>
<center>
      
        <h2>SELLER DASHBOARD</h2>
<br>
</br>


<h3><a href="Sellerdetails.php">Check Seller Login Details</a></h3>
<h3><a href="Seller Profile.php">Seller Profile</a></h3>
<h3><a href="Add Apartment.php">Add Apartment</a></h3>
<h3><a href="Appartment Details.php">Apartment Details</a></h3>
<h3><a href="">Delete Previous Apartment</a></h3>
<h3><a href="Contact.php">Contact Info</a></h3>
<h3><a href="Buyer.php">View Buyers Info</a></h3>




                    <!--  <center>
                         <h4><a href = "login.php">Logout</a></h4>
                      </center>-->

            <div align="center">
                <br><br><br><br><br><br><br><br><br>
                
                <?php include '../Mid Project/Footer.php';?>
            </div>
             

</body>
</html>