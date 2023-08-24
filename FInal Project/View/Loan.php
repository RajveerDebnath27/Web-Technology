<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
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
            <?php include '../View/Header(L).php';?>               
        </div>
        <div align="left">
            
        
        <form method="POST" action="../Model/Seller.php">  
        <input type="submit" name="Back" value="Back"/>  
        </form>  
        </div>
        <div>
                    <table>
                        <tr>
                            
                            <td>
                            <div class="container" style="width:1200px;">              
                <div align="center" class="table-responsive" > 
                     <table class="table table-bordered" border="1px">  

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

<?php
                    $connect = mysqli_connect("localhost", "root", "", "loan");
                    $output = '';
                    $query = "
                    SELECT * FROM loan
                    ";
                    $result = mysqli_query($connect, $query);
                    if(mysqli_num_rows($result) > 0)
                    {
                    $output .= '
                    <div class="table-responsive">
                    <table class="table table bordered">
                        <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Price</th>
                    <th>Location</th>
                    </tr>
                    <br>
                    
                    ';
                    while($row = mysqli_fetch_array($result))
                    {
                    $output .= '

                    <tr>
                        <td>'.$row["ID"].'</td>
                         <td>'.$row["Name"].'</td>
                         <td>'.$row["Email"].'</td>
                         <td>'.$row["Price"].'</td>
                         <td>'.$row["Location"].'</td>
                    </tr>
                    <br>

                        
                                   
                    ';
                          } 

                        echo $output;

                    }
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

<div align="center">
                
                <br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br>
                <?php include '../View/Footer.php';?>
            </div>

</body>
</div>
</div>
                    
</html>