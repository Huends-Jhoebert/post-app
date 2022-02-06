<?php session_start();
$user_id = $_SESSION["id"];
$username = $_SESSION["username"];
$password = $_SESSION["password"];
include_once "../assets/header.php";
include_once "../config/db_connection.php";

$sql = "SELECT * FROM posts ORDER BY post_time DESC";
$sql1 = "SELECT username from users INNER JOIN posts ON users.id=posts.post_user_id ORDER BY post_time DESC";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
$post_user = mysqli_fetch_all($result1, MYSQLI_ASSOC);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
$counter = 0;
?>

<title>HOMEPAGE - SEE POST</title>
</head>

<body>

	<div class="container p-3">
		<h1><?php echo $username; ?></h1>
		<a href="homepage.php" class="btn btn-primary">Add POST</a>
		<a href="../db_queries/logout.php" class="btn btn-danger">LOG OUT</a>
		<div class="row">
			<?php foreach ($posts as $post) :
			?>
				<div class="col-12 mt-3">
					<div class="card" style="width: 18rem;">
						<div class="card-body">
							<h5 class="card-title"><?php echo $post_user[$counter]["username"];
													$counter++; ?></h5>
							<p class="card-text"><?php echo $post["post_details"]; ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

</body>

<?php include_once "../assets/footer.php"; ?>