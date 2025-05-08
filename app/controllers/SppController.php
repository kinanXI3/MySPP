<?php
class SppController extends Controller{
    public function __construct() {
        checkIsNotLogin();   
        if ($_SESSION['level'] !== 'admin') {
            header("Location: http://localhost/web_spp/");
        }
    }
    public function index(){
        $this->view('spp/home');
    }

    public function tambah(){
        $this->view('spp/tambah');
    }
}