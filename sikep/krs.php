<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
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
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="biodata.php">Data Diri Siswa</a></li>
						<li><a href="krs.php">Kartu Rencana Studi</a></li>
						<li><a href="khs.php">Kartu Hasil Studi</a></li>
						<li><a href="absensi.php">Absensi</a></li>
                        <li><a href="tugas.php">Tugas</a></li>
						<li><a href="administrasi.php">Administrasi</a></li>
					</ul>
                    <ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="fa fa-user"></i>
								<span>Keluar</span>
							</a>
						</li>
                    </ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    
                    <!-- SLIDER -->
                    <div class="col-md-10">
                    <div class="row">
                    <div class="panel panel-headline">
						<div class="panel-body">
                            <div class="col-md-12">
								<div class="metric">
                                    <div class="row">
                                    <div class="col-md-2">
                                        <img src="assets/img/user-medium.png">
                                    </div>
                                    <div class="col-md-3">
                                        <h5>Nomor Induk</h5>
                                        <h5>Nama Lengkap</h5>
                                        <h5>Kelas</h5>
                                        <h5>Jurusan</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <h5>121212</h5>
                                        <h5>Luna Moonfang</h5>
                                        <h5>XII</h5>
                                        <h5>MIA</h5>
                                    </div>
                                    </div>
								</div>
							</div>
                        </div>
                    </div>
					</div>
					</div>
                    <!-- END SLIDER -->
                    
                    <!-- BAWAH -->
                    <div class="col-md-10">
                    <div class="row">
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h2 class="panel-title">Kartu Rencana Studi</h2>
                            <div class="row">
                            <div class="col-md-1">
                            Semester
                            </div>
                            <div class="col-md-2">
                                <select class="form-control input-sm">
                                    <option>6</option>
                                    <option>5</option>
                                    <option>4</option>
                                    <option>3</option>
                                    <option>2</option>
                                    <option>1</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <a href="" class="btn btn-warning">Pilih</a>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-3">
                                <a href="" class="btn btn-primary btn-block" disabled="disabled">Ambil Pelajaran</a>
                            </div>
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                *) Jadwal KRS telah ditutup
                            </div>
                            <div class="col-md-3">
                                <h5>Guru Penasihat Akademik</h5>
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="text" value="Drs. Kael Invoker" disabled>
                            </div>
                            </div>
                        </div>
						<div class="panel-body">
							<div class="metric">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kode MP</th>
											<th>Mata Pelajaran</th>
											<th>SKS</th>
											<th>Persetujuan</th>
											<th>Opsi</th>
                                        </tr>
                                    </thead>
									<tbody>
										<tr>
                                            <td>MPU-301</td>
											<td>Bahasa Indonesia</td>
											<td>3</td>
											<td><span class="label label-success">Sudah</span></td>
											<td><a href="" class="label label-danger">Drop</a></td>
                                        </tr>
										<tr>
                                            <td>MPK-301</td>
											<td>Matematika</td>
											<td>6</td>
											<td><span class="label label-success">Sudah</span></td>
                                            <td><a href="" class="label label-danger">Drop</a></td>
                                        </tr>
										<tr>
                                            <td>MPK-302</td>
											<td>Fisika</td>
											<td>6</td>
											<td><span class="label label-success">Sudah</span></td>
                                            <td><a href="" class="label label-danger">Drop</a></td>
                                        </tr>
                                        <tr>
                                            <td>MPB-301</td>
											<td>Bahasa Jepang</td>
											<td>3</td>
											<td><span class="label label-success">Sudah</span></td>
                                            <td><a href="" class="label label-danger">Drop</a></td>
                                        </tr>
                                    </tbody>
                                </table>
							</div>
						</div>
					</div>
					</div>
					</div>
                    <!-- END BAWAH -->
                    
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
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
