<?php
	if(!isset($_SESSION))
	{
		session_start();
	}
	if(!$_SESSION['error'])
	{
		$_SESSION['error'] = "403 - FORBIDDEN";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="icon" href="img/logo.png">
	<title>Error</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/my-login.css">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Ruda:wght@600&display=swap');
	</style>
</head>

<body class="my-login-page" style="font-family: 'Ruda', sans-serif; overflow : hidden; background-color:white;">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand mt-1 mb-1">
						<img src="/bootstrap/img/03. CROSS MARK.gif" alt="">
					</div>
					<div class="glowing card bg-light">
						<div class="col my-3 py-3 text-center">
							<img class="card-img-top" src="/bootstrap/img/04. FORBIDDEN.png" alt="success" >
							<h4 class="glow-error my-2 text-dark" style="font-size : 25px" >ERROR <?php echo $_SESSION['error']; ?></h4>
							<a href="index.php"><button type="button" class="btn btn-danger btn-lg mt-3">Back To Home</button></a>
						</div>
					</div>
					
					<div class="footer text-dark">
						Copyright &copy; 2021 &mdash; UD. SATU 7AN
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>