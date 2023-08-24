<html>
<head>
<title>SELLER DASHBOARD</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<link href="../View/css/Style.css" rel="stylesheet" />
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
    <div>
        <?php include '../View/Header(L).php';?>                
    </div>


<div align="left">
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
</div>


          
     <center>
            <p align="center">
                <img src="../House_logo.png" width="250px" >
            </p>
    </center>

<body>
<center>
      
        <h2>SELLER DASHBOARD</h2>
<br>
</br>




<h3><a href="Seller Profile.php">Seller Profile</a></h3>
<h3><a href="../Controller/Add Apartment.php">Add Apartment For Sale</a></h3>
<h3><a href="../Controller/Add Apartment2.php">Add Apartment For Rent</a></h3>
<h3><a href="../View/Appartment Details.php">For Sale Apartment Details</a></h3>
<h3><a href="../View/Appartment Details2.php">For Rent Apartment Details</a></h3>


<h3><a href="../View/LoanReq.php">Approve Home Loan</a></h3>
<h3><a href="../View/Loan.php">Approved Loan</a></h3>
<h3><a href="../View/Contact.php">Contact Info</a></h3>
<h3><a href="../View/Buyer.php">View Buyers Info</a></h3>




                    <!--  <center>
                         <h4><a href = "login.php">Logout</a></h4>
                      </center>-->

            <div align="center">
                <br><br><br><br><br><br><br><br><br>
                
                <?php include '../View/Footer.php';?>
            </div>
             

</body>
</div>
</div>
</html>