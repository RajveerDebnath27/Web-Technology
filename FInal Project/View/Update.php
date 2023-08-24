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
    <title>Update Profile</title>
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
     
     
      
     
     //echo $output;
        
    }
    else
    {
     echo 'Data Not Found';

    }

    ?>

    <div align="center">
    <form action="../Controller/UpdateAction.php" target="_self" method="post" onsubmit="return validprofile(this)" novalidate>
        
        <fieldset align="center" style="width: 40%;">
            <legend><b>Update Profile</b></legend>
            <br>
            <?php
                if(isset($_COOKIE['err'])) {
                    echo $_COOKIE['err'];
                }
                
            ?>
            <span id="inputErr" style="color: red;"></span>
            <table>
                <tr>
                    <td>
                        <label for="name">Name </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>"><?php if(isset($_COOKIE['emailErr'])) {echo $_COOKIE['emailErr'];} ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="username">Username </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="username" id="username" value="<?php echo $row['username']; ?>"><?php if(isset($_COOKIE['usernameErr'])) {echo $_COOKIE['usernameErr'];} ?>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                        <label for="password">Password </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="password" id="password" value="<?php echo $row['password']; ?>"><?php if(isset($_COOKIE['passwordErr'])) {echo $_COOKIE['passwordErr'];} ?>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                        <label for="gender">Gender </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="gender" id="gender" value="<?php echo $row['gender']; ?>"><?php if(isset($_COOKIE['genderErr'])) {echo $_COOKIE['genderErr'];} ?>
                    </td>
                </tr>
                <tr>
                <td>
                    <label for="dob">Date of Birth </label> 
                </td>
                <td>:</td>
                <td>
                    <input type="text" name="dob" id="dob" value="<?php echo $row['dob']; ?>">
                </td>
            </tr>
            </table>
            <br>
        </fieldset>
        <br>
        <input type='submit' name='submit' value='Update'>
        <br>
    </form>
    </div>

    <fieldset align="center" style="width: 98%;">
        <br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br>
                <br><br><br>
        <?php include '../View/Footer.php'; ?>
    </fieldset>
    <script>
        function validprofile(pro) {
            let inputErr = document.getElementById('inputErr');
            inputErr.innerHTML = "";

            let name = pro.name.value;
            let email = pro.email.value;
            let phone = pro.phone.value;
            let address = pro.address.value;
            let isvalid = true;

            if (name == "") {
                inputErr.innerHTML = "❗Input should not be empty.";
                isvalid = false;
            }
            if (email == "") {
                inputErr.innerHTML = "❗Input should not be empty.";
                isvalid = false;
            }
            if (phone == "") {
                inputErr.innerHTML = "❗Input should not be empty.";
                isvalid = false;
            }
            if (address == "") {
                inputErr.innerHTML = "❗Input should not be empty.";
                isvalid = false;
            }

            return isvalid;
        }
    </script>
</body>
</div>
</div>
</html>