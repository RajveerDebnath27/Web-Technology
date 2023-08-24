<?php
session_start();

$haserror=0;

//if(isset($_REQUEST["login"]))
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    
    $username=$_POST["username"];
    $password=$_POST["password"];

    $_SESSION['msg'] = "";
    
    if(empty($_POST["username"])&&empty($_POST["password"]) ){
         
        //echo "User Name and password cannot be empty ";
        $_SESSION['msg'] = "User Name and password cannot be empty";
        header("Location: ../Controller/login.php");
        echo '<br>';
        
    }
    else{

       // Database Connection
    $conn =mysqli_connect("localhost","root","","reg");
    if($conn->connect_error)
      { echo "connection error";
        die("Failed to connect : ".$conn->connect_error);}
    else
      {$stmt = $conn->prepare("SELECT * FROM reg WHERE username = '$username' AND password = '$password' ");
       //$stmt->bind_param("ss", $username , $password);
       $stmt->execute(); 
       $stmt_result = $stmt->get_result();
       if($stmt_result->num_rows> 0){

        $login_data = $stmt_result->fetch_all();
        



     //$login_data=file_get_contents("Data.json");
        $login=$login_data;

        $tempUserName = $_POST['username'];
     //$tempUserName = $login->username;
        $tempPass = $_POST['password'];
     //$tempPass = $login->password;

        if ($username != $tempUserName || $password != $tempPass) {
          
           echo "invalid username or password";
        
        }
        else if ($username == $tempUserName && $password == $tempPass )
        {
          $_SESSION["username"]=$username;
          header("Location:../Model/Seller.php");
          //echo "welcome";

        }
      

       }
       
    }
    
} 
}   
    ?>
<?php

// define variables and set to empty values
$usernameErrMsg = $passwordErrMsg = $checkErrMsg = "";
$username =  $password = $check = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
#Name Validation
  if (empty($_POST["username"])) 
  {
    $usernameErrMsg = "User Name is required";

  } 
  else 
  {
    $username = $_POST["username"];
    // check if name only contains letters and period & dash
    
  }

  #Password Verification
  if (empty($_POST["password"])) {
    $passwordErrMsg = "Password is required";
}
else{
    $password = $_POST["password"];

    /*if (strlen($password) < 5) {
        $passwordErrMsg = "Password must be contain at least 5 characters";
    }
    else if (!preg_match("/^[a-z0-9A-Z-' ]*$/",$password))
    {
        $passwordErrMsg = "Password is too weak";
    }*/
                
}   
}
  ?>