<?php
   /* session_start();
    if(!isset($_COOKIE['rem'])) {
        header('location: /ProjectDH/Controller/Logout.php');
    }
    if(!isset($_SESSION['username'])) {
        header("Location: /ProjectDH/View/login.php");
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../View/js/admin.js"></script>
    <title>Change Password</title>
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
<body >

    <?php include('../View/Header(L).php') ?>
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
    ?></h2>
    <div align="center">
    <form action="../Controller/ChangepassAction.php" target="_self" method="post" onsubmit="return validchngpass(this)" novalidate>
        
        <fieldset align="center" style="width: 40%;">
            <legend><b>Change Password</b></legend>
            <br>
            <?php
                if(isset($_COOKIE['msg'])) {
                    echo $_COOKIE['msg'];
                }
            ?>
            <span id="passErr"></span>
            <table>
                <tr>
                    <td>
                        <label for="curpass">Current Password </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="currentpass" id="curpass" onkeyup="validpass(this.value)"><span id="msg"></span><br>
                        <span id="currErr"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="newpass">New Password </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="newpassword" id="newpass"><br>
                        <span id="newErr"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="repass">Retype Password </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="repassword" id="repass"><br>
                        <span id="reErr"></span>
                    </td>
                    
                    
                </tr>
                    
            </table>
            <br>
        </fieldset>
        <br>
                    <input align="center" type='submit' name='submit' value='Update'>
                    <br>
        
        
    </form>
    </div>
    <br>
    <fieldset align="center" style="width: 98%;">
        <br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br>
                <br><br><br>
                
        <?php include '../View/Footer.php'; ?>
    </fieldset>

    <script>
        function validpass(pass) {
            if (pass == "") { 
                document.getElementById("msg").innerHTML = "";
                return;
            }
            else {
                let xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("msg").innerHTML = this.responseText;
                }
                xhttp.open("POST", "../Controller/CheckpassAction.php");
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("pass=" + pass);
            }
        }
    </script>
</body>
</div>
</div>
</html>