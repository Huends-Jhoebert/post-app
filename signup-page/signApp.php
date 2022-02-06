<?php include_once "../assets/header.php"; ?>
<title>SIGN UP</title>
</head>

<body>

	<div class="container">
		<div class="bg-light p-3 __form-container">
			<form action="../db_queries/signUp.php" method="post">
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Username</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1">
				</div>
				<button type="submit" class="btn btn-success">Sign up</button>
			</form>
		</div>
	</div>

</body>


<?php include_once "../assets/footer.php"; ?>