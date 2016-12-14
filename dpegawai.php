<?php

session_start();
if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
  header('location:lol.php');
} require_once('lib/DBPupuk.php');
require_once('lib/db_pegawai.php');

$peg = new Pegawai();

$id = $_GET['id'];

$peg->deletePegawai($id);
header('location:pegawai.php');

?>
