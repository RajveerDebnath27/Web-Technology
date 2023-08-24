<!DOCTYPE html>
<html>
   
    <title>Log-in</title>
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        }

        .hero-image {
        background-image: url("back.jpg");
        background-color: #cccccc;
        height: 1000px;
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
    </head>
    <body >
        <div class="hero-image">
        <div class="hero-text">
    	<div  style="width:98%;">
			<?php include '../View/Header.php';?>				
		</div>
        <center>
        <h1> Dream House </h1>      
<?php
 require '../Controller/LoginAction.php';
// define variables and set to empty values
$usernameErrMsg = $passwordErrMsg = $checkErrMsg = "";
$username =  $password = $check = "";
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
#Name Validation
  if (empty($_POST["username"])) 
  {
    $usernameErrMsg = "❗Username should not empty!";
  } 
  else 
  {
    $username = $_POST["username"];
    // check if name only contains letters and period & dash
    
  }

  #Password Verification
  if (empty($_POST["password"])) {
    $passwordErrMsg = "❗Password should not empty!";
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


<div class="container" style="width: 300px;">
<form name="signup-user"  method="POST" action="<?php echo ($_SERVER['PHP_SELF']);?>" target="_self" novalidate onsubmit="return validateForm();"> 
    <span id="msg"></span>
    <p id="login"></p>
<fieldset>
  <legend> <h2>Login</h2></legend> 
                <label for="user">UserName:</label>
                <input type="text" name="username" id="username" value="<?php echo $username;?>"><span id= "userErr"></span><span  style="color: red;">*<?php echo $usernameErrMsg ?></span><div class="error" id="lnameErr"></div> <br><br>
  				<label for="pass">Password:</label>
                <input type="text" color="bule" name="password" id="password" value="<?php echo $password;?>"><span id="passErr" style="color: red;">*<?php echo $passwordErrMsg ?></span><div class="error" id="passwordErr"></div> <br><br>

                <input type="checkbox" name="check" value="Remember Me<?php echo $check?>">Remember Me<br>

                <hr>

  <input type="submit" name="login" value="Login">
  <a href="../Controller/Fpassword.php"> Forgot Password? </a>  
  </fieldset>
  <?php 

    if(isset($_SESSION['msg']) and !empty($_SESSION['msg'])) {
      echo $_SESSION['msg'];
    }
  ?>

  <?php
//session_start();



include("../Model/Connection.php");

//($_SERVER["REQUEST_METHOD"] == "POST")    

   if(isset($_POST['login']))  {

    $_SESSION['msg'] = "";

       $username = htmlentities(mysqli_real_escape_string($con, $_POST['username']));
        $pass = htmlentities(mysqli_real_escape_string($con, $_POST['password']));
    if(!empty($username)&& !empty($pass))
        {
            $select_user = "select * from reg where username='$username' AND password='$pass'";
            $query= mysqli_query($con, $select_user);
            $check_user = mysqli_num_rows($query);



           if($check_user == 1){



               $isset=true;



        if($isset){
                      $_SESSION['username'] = $username;
                         setcookie("username",$username, time()+ 3600);
                         echo "<script>window.open('../Model/Seller.php', '_self')</script>";
                     }

        

           }
        else{

                $_SESSION['msg'] = "Your Username or Password is incorrect";
                // echo"<script>alert('Your Username or Password is incorrect')</script>";
                header("../View/Login.php");
            }
        }
        else{
            $_SESSION['msg'] = "Please Fillup the Form Properly";
                header("../View/Login.php");
            // echo"<script>alert('Please fillup all the fields')</script>";
        }




   }
?>
</form>
        <script>
           /* function validlogin() {
            let userErr = document.forms["Login"]["username"].value;
            let passErr = document.forms["Login"]["password"].value;

            if (userErr  == "") {
                alert("Name must be filled out");
                return false;

            if (passErr  == "") {
                alert("Password must be filled out");
                return false;


           }*/


           function validlogin(login) {
            let userErr = document.getElementById("userErr");
            let passErr = document.getElementById("passErr");

            userErr.innerHTML = "";
            passErr.innerHTML = "";

            let user = login.user.value;
            let pass = login.pass.value;

            let isvalid = true;
            let isEmpty = false;
            if(user === "") {
                userErr.innerHTML = "❗Username should not empty!";
                isvalid = false;
                isEmpty = true;
            }
            if(pass === "") {
                passErr.innerHTML = "❗Password should not empty!";
                isvalid = false;
                isEmpty = true;
            }
            return isvalid;
        }
        </script>
<?php 

   /* if(isset($_SESSION['msg']) and !empty($_SESSION['msg'])) {
      echo $_SESSION['msg'];
    }
    echo"welcome";*/
  ?>
</div>





<td>
                        <br>
                        
                        Not have a account?<a href="../Controller/Seller Sign Up.php">Register here</a>
                    
                    </br>
                    </td>

                    <center>
                         <h4><a href = "../View/Home.php">Home</a></h4>
                    </center>
                <div align="center">
                		
                		<br><br><br><br>
                		<br><br><br><br><br><br><br><br><br>
                		<?php include '../View/Footer.php';?>
            		</div>
        </form>

  
</center>
</div>
</div>
</body>
</html>


