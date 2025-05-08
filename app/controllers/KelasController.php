<?php 
class KelasController extends Controller{
    public function __construct() {
        checkIsNotLogin();   
        if ($_SESSION['level'] !== 'admin') {
            header("Location: http://localhost/web_spp/");
        }
    }
    public function index(){
        $this->view('kelas/home');
    }

    public function tambah(){
        $this->view('kelas/tambah');
    }
}