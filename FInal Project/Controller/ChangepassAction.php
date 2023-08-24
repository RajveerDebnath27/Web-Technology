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


    //session_start();
    //require '../Model/AdminDB.php';

    $ezl = new mysqli("localhost", "root", "", "reg");
    if ($ezl->connect_error) {
        die("Data base Connection failed: " . $ezl->connect_error);
    }

    $sql = "SELECT * FROM reg WHERE username = '$_SESSION[username]'";
    $qry = $ezl->query($sql);
    $data = $qry->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Change Passowrd</title>
    </head>
    <body>
        <?php 
            $curpass = $password = $conpassword = "";
            
            $passwordErr = "";

            $isValid = true;
            $isChecked = $isEmpty = false;

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $isChecked = true;
                function test($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                $curpass = test($_POST["currentpass"]);
                $password = test($_POST["newpassword"]);
                $conpassword = test($_POST["repassword"]);


                if(empty($curpass)) {
                    $isValid = false;
                    $isEmpty = true;
                }

                if(empty($password)) {
                    $isValid = false;
                    $isEmpty = true;
                }

                else if(strlen($password) < 8) {
                    $isValid = false;
                    $passwordErr = "❗Password must be at least 8 characters long";
                }

                if(empty($conpassword)) {
                    $isValid = false;
                    $isEmpty = true;
                }

                if($password != $conpassword) {
                    $isValid = false;
                    $passwordErr = "❌Password not matched";
                }

                if($curpass != $data['password']) {
                    $isValid = false;
                    $passwordErr = "❌Password not matched";
                }

                
                if($isValid and $isChecked){
                    setcookie('msg', '<b>✅Password Changed</b><br>', time() + 1, '/');
                    header("location: /Mid Project/View/ChangePass.php");

                    chng_password($password);
                }

                else if($isEmpty) {
                    setcookie('msg', '<b>❗Input missing</b><br>', time() + 1, '/');
                    header("location: /Mid Project/View/ChangePass.php");
                }

                else {
                    if($passwordErr != NULL)
                        setcookie('msg', '<b>' . $passwordErr . '</b>', time() + 1, '/');
                    header("location: /Mid Project/View/ChangePass.php");
                }
            }
        ?>
    </body>
</html>