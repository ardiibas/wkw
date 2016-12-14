<?php

  class Pegawai
  {
    private $db;

    public function Pegawai()
    {
      $this->db = new DBPupuk();
    }

    public function buatLogin($id, $pass)
    {
      $query = "Select * from pegawai where id_pegawai='$id' and password='$pass'";
      return $this->db->getRows($query);
    }

    public function readAllPegawai()
    {
      $query = "Select * from pegawai";
      return $this->db->getRows($query);
    }

    public function readPegawai($id)
    {
      $query = "select * from pegawai where id_pegawai='$id'";
      return $this->db->getRows($query);
    }

    public function createPegawai($id_pegawai, $nama, $alamat, $telp, $gender)
		{
			$query = "insert into pegawai (id_pegawai, nama, alamat, telp, gender)
					values('$id_pegawai', '$nama', '$alamat', '$telp', '$gender')";
			$this->db->putRows($query);
		}

    public function updatePegawai($id,$nama, $alamat, $telp, $gender)
		{
			$query = "update pegawai set nama='$nama', alamat='$alamat', telp='$telp', gender='$gender' where id_pegawai='$id'";
      $this->db->putRows($query);
		}

    public function deletePegawai($id)
    {
      $query = "delete from pegawai where id_pegawai='$id'";
      $this->db->putRows($query);
    }
  }

 ?>
