<?php
include_once "../config/db_connection.php";

if (isset($_POST["loginBtn"])) { //isset is used to check if a variable is present; in this case loginBtn is the name of the button in the login page;
	$username = $_POST["username"];
	$password = $_POST["password"];
	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		session_start();
		$_SESSION["id"] = $row["id"];
		$_SESSION["username"] = $row["username"];
		$_SESSION["password"] = $row["password"];
		header("location: ../homepage/homepage.php");
	} else
		header("location: ../index.php");
}
