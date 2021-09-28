<?php

require('database.php');
session_start();
if (isset($_SESSION["email"])) {
	session_destroy();
}



$ref = @$_GET['q'];
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$email = stripslashes($email);
	$email = addslashes($email);
	$pass = stripslashes($pass);
	$pass = addslashes($pass);
	$email = mysqli_real_escape_string($con, $email);
	$pass = mysqli_real_escape_string($con, $pass);
	$str = "SELECT * FROM usuario WHERE email='$email' and password='$pass'";

	$result = mysqli_query($con, $str);
	if ((mysqli_num_rows($result)) != 1) {
		echo "<center><h3><script>alert('Error.. Usuario o Contraseña incorrectos');</script></h3></center>";
		header("refresh:0;url=login.php");
	} else {
		$_SESSION['logged'] = $email;
		$row = mysqli_fetch_array($result);
		$_SESSION['id'] = $row[0];
		$_SESSION['name'] = $row[1];
		$_SESSION['email'] = $row[2];
		$_SESSION['password'] = $row[3];
		header('location: solicitudes.php?q=1&email='. $_SESSION['email']);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login | Cotizador Web</title>
	<meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;500&family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="css/licencias-styles-front.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <!-- JQUERY only -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<style type="text/css">
		body {
			width: 100%;
			background: url(images/login.jpg);
			background-position: center center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			font-family: "Nunito", sans-serif;
    		font-weight: 300;
   			color: #191E21;
    		font-size: 1.4em;
		}
		
		section.first {
    		padding-top: 20px;
    		transition: all 0.5s;
    		-webkit-transition: all 0.5s;
			-o-transition: all 0.5s;
			-moz-transition: all 0.5s;
		}

		section {
    		padding-top: 20px;
    		padding-bottom: 40px;
		}

		section .container {
    		padding-left: 15px;
    		padding-right: 15px;
		}

		.box-wrapper {
    		width: 400px;
    		margin: 0 auto;
		}

		.box {
			background-color: rgb(240, 240, 240);
			border-radius: 3px;
			box-shadow: 0 0 30px rgb(0 0 0 / 5%);
		}

		.box .box-body {
			padding: 30px;
		}

		.box.box-border {
			box-shadow: none;
			border: 1px solid #f2f2f2;
		}

		.form-group {
			margin-bottom: 15px;
		}

		.form-group label {
			margin-bottom: 5px;
			font-size: 20px;
			font-weight: 400;
			font-family: "Nunito", sans-serif;
			color: #000;
			font-weight: bold;
		}

		.form-group .form-control {
			border-radius: 0;
			font-family: "Nunito", sans-serif;
			font-weight: 300;
		}

		.form-group label.fw {
			display: block;
		}

		.text-right {
			text-align: right;
		}

		.btn-primary {
			background-color: #F73F52;
			border-color: #F73F52;
			font-family: "Nunito", sans-serif;
		}

		.btn-primary:disabled, .btn-primary.disabled, .btn-primary:hover, .btn-primary:active, .btn-primary:active:hover, .btn-primary:active:focus, .btn-primary:focus {
			background-color: #c8081c;
			border-color: #c8081c;
			box-shadow: none;
			outline: 0;
		}

		.btn-primary:active:hover {
			background-color: #af0719;
		}

		.btn {
			font-size: 15px;
			border-radius: 0;
			padding-left: 20px;
			padding-right: 20px;
			border-color: transparent;
			padding-top: 6px;
			padding-bottom: 4px;
			letter-spacing: .5px;
			font-family: "Nunito", sans-serif;
		}

		a, .btn {
			transition: all 0.5s;
			-webkit-transition: all 0.5s;
			-o-transition: all 0.5s;
			-moz-transition: all 0.5s;
		}

		.btn-block {
			display: block;
			width: 100%;
		}
	</style>
</head>



<body>

	<section class="login first grey">
		<div class="container">
			<div class="box-wrapper">
				<div class="box box-border">
					<div class="box-body">
						<center>
							<h5 style="font-family: Noto Sans;"></h5>
							<h4 style="font-family: Noto Sans;">Cotizador Web</h4>
						</center><br>
						<form method="post" action="login.php" enctype="multipart/form-data">
							<div class="form-group">
								<label>Correo Electronico:</label>
								<input type="email" name="email" class="form-control" >
							</div>
							<div class="form-group">
								<label class="fw">
									Contraseña:
								</label>
								<input type="password" name="password" class="form-control">
							</div>
							<div class="form-group text-right">
								<button class="btn btn-primary btn-block" name="submit">Iniciar Sesión</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.js"></script>
	<script src="scripts/bootstrap/bootstrap.min.js"></script>
</body>



</html>