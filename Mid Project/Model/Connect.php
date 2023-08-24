<?php 

	

	function connect() {
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "reg";

		$conn = mysqli_connect($hostname, $username, $password, $dbname);

		/*if (! $conn) {
			die("There were some problem in database connection.");
		}*/

		return $conn;
	}

	//require 'Connect.php';
	
	function validate($username, $password) {
		$conn = connect();
		if ($conn) {

			$sql = "SELECT id FROM users WHERE username = '" . $username . "' and password = '" . $password . "'";

			$res = mysqli_query($conn, $sql);

			if ($res->num_rows === 1)
				return true;
			return false;
		}
	}	

	function getAll() {
		$conn = connect();
		if ($conn) {

			$sql = "SELECT id, username, password, email FROM users";

			$res = mysqli_query($conn, $sql);

			$users = array();

			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}

				return $users;
			}
		}

		return array();
	}
?>