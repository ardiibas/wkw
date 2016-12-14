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

    public function createPupuk($id_pupuk, $merk, $stok)
		{
			$query = "insert into pupuk (id_pupuk, merk, stok)
					values('$id_pupuk', '$merk', '$stok')";
			$this->db->putRows($query);
		}
  }

 ?>
