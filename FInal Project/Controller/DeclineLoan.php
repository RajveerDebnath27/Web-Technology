<?php
    /*session_start();
    if(!isset($_COOKIE['rem'])) {
        header('location: /ProjectDH/Controller/Logout.php');
    }
    if(!isset($_SESSION['username'])) {
        header("Location: /ProjectDH/View/login.php");
    }*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Action</title>
</head>
<body>
    <?php //include('../View/Adminbar.php'); ?>
    <div align="center">
    <fieldset align="center" style="width: 50%; height: 450px;">
        <legend><b>Apartment Details</b></legend>
        <?php
            define("file", "../temploan.json");
            if (isset($_GET['id'])) {		
                $id = $_GET['id'];

                $handle = fopen(file, "r");
                $fr = fread($handle, filesize(file));
                $arr1 = json_decode($fr);
                $fc = fclose($handle);

                $handle = fopen(file, "w");
                $arr2 = array();
                for ($i = 0; $i < count($arr1); $i++) {
                    if (+$id !== $arr1[$i]->id) {
                        array_push($arr2, $arr1[$i]);
                    }
                }

                $data = json_encode($arr2);
                $fw = fwrite($handle, $data);
                $fc = fclose($handle);
            }
            else {
                die("Invalid Request");
            }   
            echo "<h3>❌Apartment Declined</h3><br>";
        ?>
        <a href="../View/LoanReq.php">Go Back</a>
    </fieldset>
    </div>
    

    <fieldset style="width: 98%;">
        <?php //include '../View/Footer.php'; ?>
    </fieldset>
</body>
</html>