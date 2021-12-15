<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/main.css">

	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<img src="images/logo.png" width="130">
								<h2>Welcome</h2>
								<p>Do not have an <b style="color: #ff6a3d;">account?</b></p>
								<a href="register.php" class="btn btn-white btn-outline-white">Sign Up</a>
							</div>
			      		</div>

						<div class="login-wrap p-4 p-lg-5">
			      		<div class="d-flex">
			      			<div class="w-100">
			      				<h3 class="mb-4">Sign In</h3>
								<?php
								if(isset($_GET['pesan'])) {
									if($_GET['pesan'] == "gagal") {
										echo '<div class="alert alert-warning" role="alert">
										Username and password did not match or you do not have an account yet.
										</div>';
									} elseif ($_GET['pesan'] == "username") {
										echo '<div class="alert alert-warning" role="alert">
										Username must be filled out.
										</div>';
									} elseif ($_GET['pesan'] == "password") {
										echo '<div class="alert alert-warning" role="alert">
										Password must be filled out.
										</div>';
									} elseif ($_GET['pesan'] == "berhasil") {
										echo '<div class="alert alert-primary" role="alert">
										Registration successful, please login.
										</div>';
									}
								}
                                
								?>
			      			</div>
			      		</div>
						<form action="cek_login.php" method="POST" class="signin-form" novalidate="">
			      			<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" placeholder="Username" name="username" required>
			      			</div>
		            		<div class="form-group mb-3">
		            			<label class="label" for="password">Password</label>
		              			<input type="password" class="form-control" placeholder="Password" name="password" required>
		            		</div>

		            		<div class="form-group">
		            			<button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
		            		</div>
		            		<div class="form-group d-md-flex">
		            			<div class="w-50 text-left">
			            			<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									<input type="checkbox" checked>
									<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="http://localhost/tubespw/forgot-password/">Forgot Password</a>
								</div>
		            		</div>
		          		</form>
		        		</div>
		      		</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

