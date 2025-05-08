<?php 
class Siswa extends BaseModel{
    public $table_name = "siswa"; 

    public function getByNISN($nisn) {
        $conn = mysqli_connect("localhost", "root", "", "pembayaran_spp");
        $query = "SELECT * FROM siswa WHERE nisn = '$nisn'";
        $result = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($result);
    }
    
}

