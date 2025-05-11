<?php 
class SiswaController extends Controller {
    public function __construct() {
        checkIsNotLogin();  
        if ($_SESSION['level'] !== 'admin') {
            header("Location: http://localhost/web_spp/");
        } 
    }
    public function index() {
     $this->view('siswa/home');
    }

    public function tambah() {
        $this->view('siswa/tambah');
    }

}