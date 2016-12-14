<?php

  class Admin
  {
    private $db;

    public function Admin()
    {
      $this->db = new DBPupuk();
    }

    public function buatLogin($id, $pass)
    {
      $query = "Select * from admin where id='$id' and pass='$pass'";
      return $this->db->getRows($query);
    }


    public function readAllAdmin()
    {
      $query = "select * from admin";
      return $this->db->getRows($query);
    }
  }


?>
