<?php
session_start();
//$haserror=0;
$username="";
$password="";
$tempUserName = $tempPass = "";

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

        $username = $_POST['username'];
     //$tempUserName = $login->username;
        $password = $_POST['password'];
     //$tempPass = $login->password;


    $_SESSION["username"]=$tempUserName;
    $_SESSION["password"]=$tempPass;
    echo'<br> ';
   
    echo "Your User Name Is :". $tempUserName;
    echo'<br> ';
    echo'<br> ';
    echo "Your Password Is :". $tempPass;
    echo'<br> ';
    } }
    echo "abcd";
    echo'<br> ';
    echo "Your User Name Is :". $username;
    echo'<br> ';
    echo'<br> ';
    echo "Your Password Is :". $password;
    echo'<br> ';
    ?>



   



<?php
/*session_start();
//$haserror=0;
$uname="";
$pass="";
     $login_data=file_get_contents("../Controller/Data.json");
     $login=json_decode($login_data);
      $tempUserName = $login->username;
      $tempPass = $login->password;

    $_SESSION["uname"]=$tempUserName;
    $_SESSION["pass"]=$tempPass;
    echo'<br> ';
    echo "Your User Name Is :". $tempUserName;
    echo'<br> ';
    echo'<br> ';
    echo "Your Password Is :". $tempPass;
    echo'<br> ';*/
    
?>