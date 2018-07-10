<!doctype html>
<html lang="en">

<head>
	<title>Elements | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
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
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="home.php"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="kelola_berita.php" class=""><i class="lnr lnr-home"></i> <span>Kelola Berita</span></a></li>
						<li><a href="kelola_pengumuman.php" class=""><i class="lnr lnr-code"></i> <span>Kelola Pengumuman</span></a></li>
						<li><a href="kelola_kegiatan.php" class="active"><i class="lnr lnr-chart-bars"></i> <span>Kelola Kegiatan</span></a></li>
						<li><a href="kelola_slider.php" class=""><i class="lnr lnr-cog"></i> <span>Kelola Slider</span></a></li>
						<li><a href="kelola_jurusan.php" class=""><i class="lnr lnr-alarm"></i> <span>Kelola Jurusan</span></a></li>
						<li><a href="kelola_menu_atas.php" class=""><i class="lnr lnr-alarm"></i> <span>Kelola Menu Atas</span></a></li>
						<li><a href="kelola_menu_bawah.php" class=""><i class="lnr lnr-dice"></i> <span>Kelola Menu Bawah</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Kelola Kegiatan</h3>
							<p class="panel-subtitle">Period: - Oct 14, 2016 - Oct 21, 2016 -</p>
						</div>
                        <div class="panel-body">
                            <a href="kelola_berita_tambah.php" type="button" class="btn btn-info btn-xs"><i class="lnr lnr-pencil"></i> Tambah</a>
                        </div>
						<div class="panel-body">
                            <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>ID</th>
										<th>Judul Kegiatan</th>
										<th>Isi Kegiatan</th>
										<th>Tgl Posting</th>
										<th>Admin</th>
                                        <th>Kelola</th>
									</tr>
								</thead>
<!--
								<tfoot>
									<tr>
										<th>ID</th>
										<th>Judul Berita</th>
										<th>Isi Berita</th>
										<th>Tgl Posting</th>
										<th>Admin</th>
                                        <th>Admin</th>
									</tr>
								</tfoot>
-->
								<tbody>
									<tr>
										<td>1</td>
										<td>System Architect</td>
										<td>....................</td>
										<td>2011/04/25</td>
										<td>Luna</td>
                                        <td>
                                            <a href="kelola_berita_ubah.php" type="button" class="btn btn-warning btn-xs"><i class="fa fa-info-circle"></i> Ubah</a>
                                            <a href="kelola_berita_ubah.php" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </td>
									</tr>
									<tr>
										<td>2</td>
										<td>Accountant</td>
										<td>...................</td>
										<td>2011/07/25</td>
										<td>Alleria</td>
                                        <td>
                                            <a href="kelola_berita_ubah.php" type="button" class="btn btn-warning btn-xs"><i class="fa fa-info-circle"></i> Ubah</a>
                                            <a href="kelola_berita_ubah.php" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </td>
									</tr>
								</tbody>
                            </table>
                        </div>
                        
					</div>
					<!-- END OVERVIEW -->
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
