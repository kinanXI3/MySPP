<?php 
class Petugas extends BaseModel{
    public $table_name = "petugas"; 

    public function getByUsername($username){
        $result = $this->mysqli->query("SELECT * FROM $this->table_name WHERE username = '$username'");
        return $result->fetch_assoc();
    }

}