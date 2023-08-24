
<!DOCTYPE html>
<html>
   
    <title>Log-in</title>

    <body >
    	<div>
			<?php include '../Mid Project/Header.php';?>				
		</div>
        <center>
        <h1> Paradise Property </h1>

      
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

    if (strlen($password) < 5) {
        $passwordErrMsg = "Password must be contain at least 5 characters";
    }
    else if (!preg_match("/^[a-z0-9A-Z-' ]*$/",$password))
    {
        $passwordErrMsg = "Password is too weak";
    }
                
}   
}
  ?>

<div class="container" style="width: 300px;">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<fieldset>
  <legend> <h2>Login</h2></legend> 
                <label>UserName:</label>
                <input type="text" name="username" value="<?php echo $username;?>"><span style="color: red;">*<?php echo $usernameErrMsg ?></span> <br><br>
  				<label>Password:</label>
                <input type="text" name="password" value="<?php echo $password;?>"><span style="color: red;">*<?php echo $passwordErrMsg ?></span> <br><br>

                <input type="checkbox" name="check" value="Remember Me<?php echo $check?>">Remember Me<br>

                <hr>

  <input type="submit" name="login" value="Login">
  <a href="/Mid Project/Fpassword.php"> Forgot Password? </a>  
  </fieldset>
</form>
</div>

<?php
session_start();

$haserror=0;

if(isset($_REQUEST["login"])){
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if(empty($_POST["username"])&&empty($_POST["password"]) ){
         
        echo "User Name and password cannot be empty ";
        echo '<br>';
        
    }
    else{

     $login_data=file_get_contents("Data.json");
     $login=json_decode($login_data);
     $tempUserName = $login->username;
     //$tempUserName = $login->username;
     $tempPass = $login->password;
     //$tempPass = $login->password;

      if ($username != $tempUserName || $password !=$tempPass) {
        echo "invalid username or password";
        
      }
      else if ($username == $tempUserName && $password == $tempPass )
     {
      $_SESSION["username"]=$username;
        header("Location:../Mid%20Project/Seller.php");
        

     }

       }
       
    }
    
    
    ?>
<td>
                        <br>
                        
                        Not have a account?<a href="Seller Sign Up.php">Register here</a>
                    
                    </br>
                    </td>

                    <center>
                         <h4><a href = "Home.php">Home</a></h4>
                    </center>
                    <div align="center">
                		<br><br><br><br><br><br><br><br><br>
                		<br><br><br><br><br><br><br><br><br>
                		<br><br><br><br><br><br><br><br><br>
                		<?php include '../Mid Project/Footer.php';?>
            		</div>
        </form>
</center>
</body>
</html>


