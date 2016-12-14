<?php

  class Pegawai
  {
    private $db;

    public function Pegawai()
    {
      $this->db = new DBPupuk();
    }

    public function readAllPegawai()
    {
      $query = "Select * from pegawai";
      return $this->db->getRows($query);
    }

    public function createPegawai($id_pegawai, $nama, $alamat, $telp, $gender)
		{
			$query = "insert into pegawai (id_pegawai, nama, alamat, telp, gender)
					values('$id_pegawai', '$nama', '$alamat', '$telp', '$gender')";
			$this->db->putRows($query);
		}
  }

 ?>
