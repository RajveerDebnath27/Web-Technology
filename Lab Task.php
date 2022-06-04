<?php
// define variables and set to empty values
$frinst name = $last name = $gender = $email = $mobile no. = $Street/House/Road = $Country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $frist name = test_input($_POST["frist name"]);
  $last name = test_input($_POST["last name"]);
  $gender = test_input($_POST["gender"]);
  $email = test_input($_POST["email"]);
  $mobile no. = test_input($_POST["mobile no."]);
  $Street/House/Road = test_input($_POST["Street/House/Road"]);
  $Country = test_input($_POST["Country"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>