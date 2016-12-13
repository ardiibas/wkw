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
			<li><a href="index.php"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Pembelian</a></li>
			<li class="active"><a href="penjualan.php"><svg class="glyph stroked basket "><use xlink:href="#stroked-basket"/></svg>Penjualan</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="lol.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>

	</div><!--/.sidebar-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Penjualan</h1>
			</div>
		</div><!--/.row-->

		<div class="panel-body">
			<div class="col-xs-pull-0">
				<form role="form">
					<div class="form-group">
						<label>No. Penjualan</label>
						<input class="form-control" >
					</div>
					<div class="form-group">
						<label>Id Pupuk</label>
						<input class="form-control" >
					</div>
					<div class="form-group">
						<label>Id Penjual</label>
						<input class="form-control" >
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input class="form-control" >
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input class="form-control" >
					</div>
				</form>
			</div>
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-default">Reset</button>

	</div><!--/.main-->


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
