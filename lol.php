<?php

session_start();
require_once('lib/DBPupuk.php');
require_once('lib/db_admin.php');
require_once('lib/db_pegawai.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$peg = new Pegawai();
	$ad = new Admin();

	$data = $peg->buatLogin($_POST['id'],$_POST['password']);
	$data1 = $ad->buatLogin($_POST['id'],$_POST['password']);

	// print_r($data);
	// print_r($data1); exit;

	if (!empty($data1))
	{
		$_SESSION['id'] = $data1[0]['id'];
		$_SESSION['level'] = 'admin';
		header('location:index.php');
	}
	elseif (!empty($data))
	{
		header('location:pembelian.php');
	}
	else
	{
		header('location:lol.php');
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login - Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Id" name="id" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->



	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
