<?php 
//session_start();

//if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
session_start();
if(empty($_SESSION["username"]) )
{
    header("location: ../Controller/Changepassword.php");
}
    

$_SESSION['username']= '';
$sname= "localhost";
$username= "root";
$password = "";

/*$db_name = "reg";

$conn = mysqli_connect($sname, $username, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}*/


// Database Connection
    $conn =mysqli_connect("localhost","root","","reg");
    if($conn->connect_error)
      { echo "connection error";
        die("Failed to connect : ".$conn->connect_error);}

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
      header("Location: Changepassword.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: Changepassword.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: Changepassword.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	$op = md5($op);
    	$np = md5($np);
        $username = $_SESSION['username'];

        $sql = "SELECT password
                FROM reg WHERE 
                username='$username' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE users
        	          SET password='$np'
        	          WHERE username='$username'";
                     
        	mysqli_query($conn, $sql_2);
            
        	header("Location: Changepassword.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: Changepassword.php?error=Incorrect password");
	        exit();
        }

    }

    
}else{
	header("Location: Changepassword.php");
	exit();
}

//}
//else{
  //   header("Location: index.php");
    // exit();
//}