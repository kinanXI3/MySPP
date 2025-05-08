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
    public function edit($id) {
        return  "Ini adalah method edit() di dalam class SiswaController dengan parameter $id";
    }

    public function tambah() {
        $this->view('siswa/tambah');
    }
}