<?php
session_start();



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