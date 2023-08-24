

<?php
    

    define("t", "../temploan.json");
    $handle_t = fopen(t, "r");
    $fr1 = fread($handle_t, filesize(t));
    $arr1 = json_decode($fr1);
    $fc1 = fclose($handle_t);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Apartment Requests</title>
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
        <div align="left">
        <h2><?php
        session_start();
        if(empty($_SESSION["username"]) )
        {
            header("location: ../View/Login.php");
        }
        //echo $_SESSION["username"];
        ?>

        <?php include '../View/Header(L).php';?>
        <?php
        $cookie_name="Seller"; $cookie_value="Visited"; setcookie($cookie_name, $cookie_value,time() + 86400, "/"); 
        //if(isset($_COOKIE[$cookie_name])) { echo "Welcome ".$cookie_name; } else { echo "Welcome ".$cookie_name; }
        if(isset($_SESSION["username"])) { echo "Welcome ".$_SESSION["username"]; } else { echo "Welcome ".$_SESSION["username"]; }
        ?>
</h2>
</div>
        <div align="center">
        <?php //include('../View/Adminbar.php') ?>
        <fieldset align="center" style="width: 50%; height: 20em; overflow: scroll;">
            <legend><b>Apartment Requests</b></legend>
            <br>
            <table border="1" align="center">
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Loan Amount</th>
                    <th>Location</th>
                    
                    <th colspan="2">Action</th>
                </tr>
                <?php 
                    if ($arr1 === NULL) {}
                    else {
                        for ($i = 0; $i < count($arr1); $i++) {
                            echo "<tr>";
                            echo "<td>" . $arr1[$i]->id. "</td>";
                            echo "<td>" . $arr1[$i]->name. "</td>";
                            echo "<td>" . $arr1[$i]->email. "</td>";
                            echo "<td>" . $arr1[$i]->price . "</td>";
                            echo "<td>" . $arr1[$i]->location. "</td>";
                            
                            echo "<td>" . "<a href='../Controller/AcceptLoan.php?id=" . $arr1[$i]->id . "'>✅Accept</a></td>";
                            echo "<td>" . "<a href='../Controller/DeclineLoan.php?id=" . $arr1[$i]->id . "'>❌Decline</a></td>";
                        }
                    }
                ?>
                
            </tbody>
            
        </table>
        </fieldset>
        </div>
        <br>
        <fieldset align="center" style="width: 98%;">
            <br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br>s
            <?php include '../View/Footer.php'; ?>
        </fieldset>
    </body>
</div>
</div>
</html>