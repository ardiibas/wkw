<?php

  class Pembeli
  {
    private $db;

    public function Pembeli()
    {
      $this->db = new DBPupuk();
    }

    public function readAllPembelian()
    {
      $query = "Select * from detail_pembelian";
      return $this->db->getRows($query);
    }

    public function createPembelian($no_pembelian, $id_pupuk, $id_pembelian, $jumlah, $harga_beli)
		{
			$query = "insert into detail_pembelian (no_pembelian, id_pupuk, id_pembelian, jumlah, harga_beli)
					values('$no_pembelian', '$id_pupuk', '$id_pembelian', '$jumlah', '$harga_beli')";
			$this->db->putRows($query);
		}

    public function updatePembelian($id, $data)
		{
			$name = $data['input_name'];
			$email = $data['input_email'];
			$nationality = $data['input_nationality'];
			$foto = $data['foto'];

			$query = "update siswa set full_name='$name', email='$email', foto='$foto'";

			// if($nationality>0)
			// {
			// 	$query.=",id_nationality='$nationality'";
			// 	$query.=" where id_siswa=$id";
			// 	$this->db->putRows($query);
			// }
		}

		public function deletePembelian($id)
		{
			$sql = "Delete from detail_pembelian where no_pembelian=$id";
			$this->db->putRows($sql);
		}
  }

 ?>
