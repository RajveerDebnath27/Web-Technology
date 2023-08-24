
<!DOCTYPE html>
<html>
   
    <title>Log-in</title>
    <script src="../View/js/login_validation.js"></script>
    <body >
    	<div>
			<?php include '../View/Header.php';?>				
		</div>
        <center>
        <h1> Dream House </h1>

      
<?php
 require 'LoginAction.php';
// define variables and set to empty values
$usernameErrMsg = $passwordErrMsg = $checkErrMsg = "";
$username =  $password = $check = "";
?>
<?php
/*
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
    }
                
}   
}*/
  ?>



<div class="container" style="width: 300px;">
<form method="post" action="../Controller/LoginAction.php" novalidate onsubmit="return validate(this);"> 
<fieldset>
  <legend> <h2>Login</h2></legend> 
                <label>UserName:</label>
                <input type="text" name="username" value="<?php echo $username;?>"><span id= "unameErr"></span><span  style="color: red;">*<?php echo $usernameErrMsg ?></span> <br><br>
  				<label>Password:</label>
                <input type="text" name="password" value="<?php echo $password;?>"><span id="passErr" style="color: red;">*<?php echo $passwordErrMsg ?></span> <br><br>

                <input type="checkbox" name="check" value="Remember Me<?php echo $check?>">Remember Me<br>

                <hr>

  <input type="submit" name="login" value="Login">
  <a href="../Controller/Fpassword.php"> Forgot Password? </a>  
  </fieldset>
</form>
<?php 

   /* if(isset($_SESSION['msg']) and !empty($_SESSION['msg'])) {
      echo $_SESSION['msg'];
    }
    echo"welcome";*/
  ?>
</div>


<?php 
/*session_start();
$host="localhost";
$username="root";
$password="";
$db="reg";

mysqli_connect($host,$username,$password,$db);
//mysqli_select_db($db);

if(isset($_POST['username'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM loginform where username='".$username."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($db,$sql);
    $user = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}

if (isset($_POST['Login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    echo "Username is required";
  }
  if (empty($password)) {
    echo "Password is required";
  }

  //if (count($errors) == 1) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: ../Model/Seller.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
 // }
}*/


?>


<?php
  /*session_start();
  function test_input(){
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
  }

    //$data = "";

    // Database Connection
    $conn = new mysqli("localhost","root","","reg");
    if($conn->connect_error)
      { echo "connection error";
        die("Failed to connect : ".$conn->connect_error);}
    else
      {$stmt = $conn->prepare("SELECT * FROM reg WHERE username = ? ");
       $stmt->bind_param("s", $username);
       $stmt->execute(); 
       $stmt_result = $stmt->get_result();
       if($stmt_result->num_rows> 0){

        $data = $stmt_result->fetch_assoc();
        
        


        if($data['username'] !== $username  )
        {

        echo"log in successfull";
        $_SESSION["username"]=$username;
        header("Location:../Model/Seller.php");
        }

       }
       
       else 
       //$data = $stmt_result->fetch_assoc();
        //if($data['username'] === !$username ) 
       {
        echo "invalid username or password";
       }


      }*/





?>

<?php
/*session_start();

$haserror=0;

if(isset($_REQUEST["login"])){
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if(empty($_POST["username"])&&empty($_POST["password"]) ){
         
        echo "User Name and password cannot be empty ";
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
}  */ 
    ?>
<td>
                        <br>
                        
                        Not have a account?<a href="../Controller/Seller Sign Up.php">Register here</a>
                    
                    </br>
                    </td>

                    <center>
                         <h4><a href = "../View/Home.php">Home</a></h4>
                    </center>
                    <div align="center">
                		<br><br><br><br><br><br><br><br><br>
                		<br><br><br><br><br><br><br><br><br>
                		<br><br><br><br><br><br><br><br><br>
                		<?php include '../View/Footer.php';?>
            		</div>
        </form>
  <?php 

    if(isset($_SESSION['msg']) and !empty($_SESSION['msg'])) {
      echo $_SESSION['msg'];
    }
  ?>
</center>
</body>
</html>


