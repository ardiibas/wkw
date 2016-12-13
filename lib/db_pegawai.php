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
  }

 ?>
