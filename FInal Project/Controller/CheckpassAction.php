<?php

    session_start();
    if(empty($_SESSION["username"]) )
    {
        header("location: ../View/Login.php");
    }


    $ezl = new mysqli("localhost", "root", "", "reg");
    if ($ezl->connect_error) {
        die("Data base Connection failed: " . $ezl->connect_error);
    }

    $sql = "SELECT * FROM reg WHERE username='$_SESSION[username]'";
    $qry = $ezl->query($sql);
    $data = $qry->fetch_assoc();

    $pass = $passErr = "";
    $isValid = true;
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $isChecked = true;
        function test($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $pass = test($_POST["pass"]);

        if($pass !== $data['password']) {
            $isValid = false;
            $passErr = "❌";
        }
        else 
            $passErr = "✅";

        echo $passErr;
    }

    $ezl->close();
?>