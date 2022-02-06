<?php include_once "../config/db_connection.php";

$sql = "INSERT INTO posts (post_user_id, post_details)
	VALUES('$_POST[post_user_id]', '$_POST[post_details]')";


$result = mysqli_query($conn, $sql);

if ($result) {
	header("Location: ../homepage/homepage.php");
} else {
	echo mysqli_error($conn);
}
