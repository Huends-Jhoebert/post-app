<?php include_once "assets/header.php"; ?>
<title>POST APP</title>
</head>

<body>

	<div class="container">
		<div class="bg-light p-3 __form-container">
			<form action="db_queries/logIn.php" method="POST">
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Username</label>
					<input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1">
				</div>
				<button type="submit" class="btn btn-primary" name="loginBtn">Log In</button>
				<a href="signup-page/signApp.php" class="btn btn-success">Sign up</a>
			</form>
		</div>
	</div>

</body>
<?php include_once "assets/footer.php"; ?>