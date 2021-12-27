<?php

	require_once'../includes/koneksi.php';
	if (isset($_POST['submit'])){
		$username = ($_POST['username']);
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$cpass = $_POST['cpassword'];
		$password = password_hash($pass, PASSWORD_BCRYPT);
		$cpassword = password_hash($cpass, PASSWORD_BCRYPT);
		$level = 'Visitor';
		$usernamecheck = (mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'")));
		$msg = "";

		if (empty($username)) {
			header("location:register.php?pesan=nousername");
		} elseif (empty($nama)) {
			header("location:register.php?pesan=nonama");
		} elseif (empty($email)) {
			header("location:register.php?pesan=noemail");
		} elseif (empty($pass || $cpass)) {
			header("location:register.php?pesan=nopass");
		} elseif ($pass != $cpass) {
			header("location:register.php?pesan=match");
		} elseif ($usernamecheck > 0) {
			header("location:register.php?pesan=check");
		} else {
			$sql = "INSERT INTO user (username,nama,email,password,level) VALUES ('$username','$nama','$email','$password','$level')";
																			
			if($koneksi->query($sql)===TRUE){
				header("location:login.php?pesan=berhasil");
			} else {
				echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
			}
		}
	}
									
	$koneksi->close();
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" href="images/logo/LOGO 1.9.png" type="image/png" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/main.css">

	<link rel="stylesheet" href="css/style.css">

	<style>
		.form-select {
			border-radius: 50px;
			background-color: #F2F2F2;
			border: none;
			height: 50px;
		}
	</style>
	
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<a href="../index.php"><img src="images/logo.png" width="150"></a>
								<h2>Welcome</h2>
								<p>Already have an <b style="color: #ff6a3d;">account?</b></p>
								<a href="login.php" class="btn btn-white btn-outline-white">Sign In</a>
							</div>
			      		</div>
						<div class="login-wrap p-4 p-lg-5">
			      		<div class="d-flex">
			      			<div class="w-100">
			      				<h3 class="mb-4">Sign Up</h3>
								  <?php
								  	if(isset($_GET['pesan'])) {
										if($_GET['pesan'] == "nousername") {
											echo '<div class="alert alert-warning" role="alert">
											Username must be filled out.
											</div>';
										} elseif ($_GET['pesan'] == "nonama") {
											echo '<div class="alert alert-warning" role="alert">
											Name must be filled out.
											</div>';
										} elseif ($_GET['pesan'] == "noemail") {
											echo '<div class="alert alert-warning" role="alert">
											Email must be filled out.
											</div>';
										} elseif ($_GET['pesan'] == "nopass") {
											echo '<div class="alert alert-warning" role="alert">
											Password must be filled out.
											</div>';
										} elseif ($_GET['pesan'] == "match") {
											echo '<div class="alert alert-warning" role="alert">
											Password did not match.
											</div>';
										} elseif ($_GET['pesan'] == "check") {
											echo '<div class="alert alert-warning" role="alert">
											Username already exists.
											</div>';
										}
									}
								  ?>
			      			</div>
			      		</div>
						<form method="POST" class="signin-form" novalidate="">
			      			<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" placeholder="Username" name="username">
			      			</div>

							<div class="form-group mb-3">
			      			<label class="label" for="nama">Name</label>
			      			<input type="text" class="form-control" placeholder="Nama" name="nama">
			      			</div>

							<div class="form-group mb-3">
		            			<label class="label" for="email">Email</label>
		              			<input type="email" class="form-control" placeholder="Email" name="email">
		            		</div>

		            		<div class="form-group mb-3">
		            			<label class="label" for="password">Password</label>
		              			<input type="password" class="form-control" placeholder="Password" name="password">
		            		</div>

							<div class="form-group mb-3">
		            			<label class="label" for="password">Confirm Password</label>
		              			<input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
		            		</div>

							<div class="w-100">
			            		<label class="checkbox-wrap checkbox-primary mb-0">I agree all statements in Terms of service
								<input type="checkbox" checked>
								<span class="checkmark"></span>
								</label>
							</div>
							<br>
		            		<div class="form-group">
		            			<button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
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