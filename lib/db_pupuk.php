<?php

  class Pupuk
  {
    private $db;

    public function Pupuk()
    {
      $this->db = new DBPupuk();
    }

    public function readAllPupuk()
    {
      $query = "Select * from pupuk";
      return $this->db->getRows($query);
    }
  }

 ?>
