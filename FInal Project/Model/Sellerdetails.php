<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
        <div>
            <?php include '../View/Header(L).php';?>               
        </div>
        <form method="POST" action="../Model/Seller.php">  
        <input type="submit" name="Back" value="Back"/>  
        </form>  

              
<?php
session_start();
if(empty($_SESSION["username"]) )
{
    header("location: ../View/Login.php");
}
//echo $_SESSION["username"];
?>


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
 echo $row["username"];
 echo $row["password"];
  
 
 //echo $output;
    
}
else
{
 echo 'Data Not Found';

}

?>

<?php

//fetch.php
/*$connect = mysqli_connect("localhost", "root", "", "reg");
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
 $output .= '
  <div align="center" class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Username</th>
     <th>Password</th>
     <th>Gender</th>
     <th>Date</th>
     
    </tr>
 ';
 $row = mysqli_fetch_array($result);
 echo $row["username"];
  $output .= '
   '.$row["username"].'
   <tr>
    <td>'.$row["username"].'</td>
    <br>
    <td>'.$row["password"].'</td>
    <br>
    <td>'.$row["gender"].'</td>
    <br>
    <td>'.$row["dob"].'</td>
    
   </tr>
  ';
 
 //echo $output;
    
}
else
{
 echo 'Data Not Found';

}*/

?>
</body>
            <div align="center">
                
                
                <?php include '../View/Footer.php';?>
            </div>        
</html>

   




