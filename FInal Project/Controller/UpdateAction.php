<?php
    session_start();
    if(empty($_SESSION["username"]) )
    {
        header("location: ../View/Login.php");
    }

    function connect() {
        $server = "localhost";
        $db_user = "root";
        $db_pass = "";
        $dbname = "reg";
        $ezl = new mysqli($server, $db_user, $db_pass, $dbname);

        if ($ezl->connect_error) {
            die("Data base Connection failed: " . $ezl->connect_error);
        }

        return $ezl;
    } 
    //require 'Connect.php';

    function update($name, $email, $username, $password, $gender, $dob) {
        $ezl = connect();
        $sql = "UPDATE reg SET name='$name', email='$email',username='$username', password='$password',gender='$gender', dob='$dob' WHERE username='$_SESSION[username]'";

        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['gender'] = $gender;
        $_SESSION['dob'] = $dob;

        $qry = $ezl->query($sql);
        $ezl->close();
    }

    function chng_password($password) {
        $ezl = connect();
        $sql = "UPDATE reg SET Password='$password'";
        $qry = $ezl->query($sql);

        $ezl->close();
    }
    
    function news($news, $date) {
        $ezl = connect();
        $sql = "INSERT INTO news (Date, News) VALUES ('$date', '$news')";
        $result = $ezl->query($sql);

        $ezl->close();
    }

    function delete($id) {
        $ezl = connect();
        $sql = "DELETE FROM news WHERE ID=$id";
        $qry = $ezl->query($sql);
    }

    function deletequery($id) {
        $ezl = connect();
        $sql = "DELETE FROM query WHERE ID=$id";
        $qry = $ezl->query($sql);
    }

    
    //require '../Model/AdminDB.php';
    echo "<h2>Update Profile</h2>";
    session_start();
    $name = $email = $username = $password = $gender = $dob =  "";

    $nameErr = $emailErr = $usernameErr = $passwordErr = $genderErr = $dobErr =  "";
    

    $isValid = true;
    $isChecked = $isEmpty = false;

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $isChecked = true;
        function test($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $name = test($_POST["name"]);
        $email = test($_POST["email"]);
        $username = test($_POST["username"]);
        $password = test($_POST["password"]); 
        $gender = test($_POST["gender"]);
        $dob = test($_POST["dob"]);
        
        

        if(empty($name)) {
            $isValid = false;
            $isEmpty = true;
        }

        if(empty($username)) {
            $isValid = false;
            $isEmpty = true;
        }
        
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $isValid = false;
            $emailErr = "<b>❌Invalid email format</b>";
        }

        if(empty($password)) {
            $isValid = false;
            $isEmpty = true;
        }

        if(empty($gender)) {
            $isValid = false;
            $isEmpty = true;
        }

        
        elseif(empty($dob)) {
            $isValid = false;
            $isEmpty = true;
        }
    }
    if($isValid and $isChecked){
        header('location:../Model/Seller Profile.php');

        //update data
        update($name, $email, $username, $password, $gender, $dob);
    }

    else if($isEmpty) {
        setcookie('err', "<b>❌Required input should not empty</b>", time() + 1, "/");
        header("location: /Mid Project/View/Update.php");
    }

    else {
        if($emailErr != NULL)
            setcookie('emailErr', $emailErr, time() + 1, "/");
        if($phoneErr != NULL)
            setcookie('phoneErr', $phoneErr, time() + 1, "/");
        header("location: /Mid Project/View/Update.php");
    }
?>