<?php

	require_once('lib/DBPupuk.php');
	require_once('lib/db_pembeli.php');

	$id = $_GET['no_pembelian'];

	$pem = new Pembeli();
	$data = $pem->deletePembelian($id);

	if(empty($data))
	{
		echo "Data dah dihapus...";
	}
?>

<br />

<a href = "siswa.php">Back Gengs</a>
