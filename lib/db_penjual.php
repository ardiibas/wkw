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
      $query = "Select * from detail_penjualan";
      return $this->db->getRows($query);
    }
  }

 ?>
