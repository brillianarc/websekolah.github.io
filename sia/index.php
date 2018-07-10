<?php
session_start();
?>

<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Deteksi Dini ADHD</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content text">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Masuk ke sistem</p>
							</div>
							<form class="form-auth-small" action="masuk.php" method="POST">
								<div class="form-group">
									<input type="text" class="form-control" name="nis" placeholder="Nomor Induk Siswa" required><br>
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
<!--								<input type="submit" class="btn btn-primary btn-lg btn-block" value="Masuk">-->
                                <a href="home.php" class="btn btn-primary btn-lg btn-block">Masuk</a>
							</form>
<!--
                            <br><br><br>
                            <h4 class="heading">Link Website</h4>
				            <ul class="list-inline social-icons">
                                <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
                            </ul>
-->
						</div>
					</div>
					<div class="right">
						<div class="content">
<!--							<h4 class="text-putih">OPTIMASI BOBOT LEARNING VECTOR QUANTIZATION (LVQ)<br>DENGAN ALGORITMA GENETIKA UNTUK DETEKSI DINI<br>JENIS ATTENTION DEFICIT HYPERACTIVITY DISORDER (ADHD)</h4>-->
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
