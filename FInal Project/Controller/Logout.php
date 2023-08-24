<?php 
session_start();

if (isset($_SESSION['username'])) {
    session_destroy();
    header("location:../View/Login.php");
}
else {
    header("location:../View/Login.php");
}

 ?>