<?php
include_once "../config/db_connection.php";

$sql = "INSERT INTO users (username, password)
	VALUES('$_POST[username]', '$_POST[password]')";

$result = mysqli_query($conn, $sql);

if ($result) {
	header("Location: ../index.php");
} else {
	echo mysqli_error($conn);
}
