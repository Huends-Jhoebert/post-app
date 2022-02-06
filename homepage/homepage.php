<?php session_start();
$user_id = $_SESSION["id"];
$username = $_SESSION["username"];
$password = $_SESSION["password"];
include_once "../assets/header.php";

?>

<title>HOMEPAGE - ADD POST</title>
</head>

<body>

	<div class="container p-3">
		<h1><?php echo $username; ?></h1>
		<a href="homepage-posts.php" class="btn btn-primary">POSTS</a>
		<a href="../db_queries/logout.php" class="btn btn-danger">LOG OUT</a>
		<form class="mt-3" action="../db_queries/post.php" method="post">
			<input type="hidden" name="post_user_id" value="<?php echo $user_id; ?>">
			<div class="form-floating">
				<textarea name="post_details" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
				<label for="floatingTextarea2">Comments</label>
			</div>
			<button type="submit" class="btn btn-success mt-3">POST</button>
		</form>
	</div>

</body>

<?php include_once "../assets/footer.php"; ?>