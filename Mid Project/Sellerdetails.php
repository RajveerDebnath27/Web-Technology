<?php
session_start();
//$haserror=0;
$uname="";
$pass="";
     $login_data=file_get_contents("Data.json");
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
    echo'<br> ';
    
    ?>