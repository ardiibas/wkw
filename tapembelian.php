<?php

require_once('lib/DBPupuk.php');
require_once('lib/db_pembeli.php');
// error_reporting(1);
$pem = new Pembeli();

if (isset($_POST['kirim'])) {
	if (!empty($_POST['no']) && !empty($_POST['idpuk']) && !empty($_POST['idpem']) && !empty($_POST['jum']) && !empty($_POST['harb'])) {
		$tambah = $pem->createPembelian($_POST['no'], $_POST['idpuk'], $_POST['idpem'], $_POST['jum'], $_POST['harb']);
	}
	//echo "data siswa berhasil ditambahkan <br /> <br />";
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PWL - Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Database</span>Pupuk</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->

			<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Pembelian</a></li>
			<li><a href="apenjualan.php"><svg class="glyph stroked basket "><use xlink:href="#stroked-basket"/></svg>Penjualan</a></li>
			<li><a href="pegawai.php"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>Pegawai</a></li>
			<li><a href="pupuk.php"><svg class="glyph stroked calendar blank"><use xlink:href="#stroked-calendar-blank"/></svg>Pupuk</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="lol.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>

	</div><!--/.sidebar-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Pembelian</h1>
			</div>
		</div><!--/.row-->

		<div class="panel-body">
			<div class="col-xs-pull-0">
				<form role="form" action="tapembelian.php" method="post">
					<div class="form-group">
						<label>No. Pembelian</label>
						<input class="form-control" type="text" name="no">
					</div>
					<div class="form-group">
						<label>Id Pupuk</label>
						<input class="form-control" type="text" name="idpuk">
					</div>
					<div class="form-group">
						<label>Id Pembeli</label>
						<input class="form-control" type="text" name="idpem">
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input class="form-control" type="text" name="jum">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input class="form-control" type="text" name="harb">
					</div>
					<button type="submit" name="kirim" class="btn btn-primary">Submit</button>
					<button type="reset" class="btn btn-default">Reset</button>
				</form>
			</div>
		</div>

	</div><!--/.main-->


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
