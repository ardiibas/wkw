<?php

  class Penjual
  {
    private $db;

    public function Penjual()
    {
      $this->db = new DBPupuk();
    }

    public function readAllPenjualan()
    {
      $query = "SELECT dp.no_penjualan, pk.merk as pupuk, p.nama as pembeli, dp.jumlah, dp.harga_jual FROM detail_penjualan dp JOIN pupuk pk ON dp.id_pupuk = pk.id_pupuk JOIN penjualan pj ON pj.id_penjualan = dp.id_penjualan JOIN pembeli p ON p.id_pembeli = pj.id_pembeli";
      return $this->db->getRows($query);
    }

    public function createPenjualan($no_penjualan, $id_pupuk, $id_penjualan, $jumlah, $harga_jual)
		{
			$query = "insert into detail_penjualan (no_penjualan, id_pupuk, id_penjualan, jumlah, harga_jual)
					values('$no_penjualan', '$id_pupuk', '$id_penjualan', '$jumlah', '$harga_jual')";
			$this->db->putRows($query);
		}
  }

 ?>
