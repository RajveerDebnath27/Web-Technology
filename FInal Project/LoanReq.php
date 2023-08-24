<?php
    /*session_start();
    if(!isset($_COOKIE['rem'])) {
        header('location: /ProjectDH/Controller/Logout.php');
    }
    if(!isset($_SESSION['username'])) {
        header("Location: /ProjectDH/View/login.php");
    }*/

    define("t", "temploan.json");
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
    <body>
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
                            //echo "<td>" . $arr1[$i]->details . "</td>";
                            echo "<td>" . "<a href='AcceptLoan.php?id=" . $arr1[$i]->id . "'>✅Accept</a></td>";
                            echo "<td>" . "<a href='DeclineLoan.php?id=" . $arr1[$i]->id . "'>❌Decline</a></td>";
                        }
                    }
                ?>
                
            </tbody>
            
        </table>
        </fieldset>
        </div>
        <br>
        <fieldset style="width: 98%;">
            <?php include '../View/Footer.php'; ?>
        </fieldset>
    </body>
</html>