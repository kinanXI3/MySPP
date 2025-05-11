<?php 
class PembayaranController extends Controller{
    public function __construct() {
        checkIsNotLogin();
        if ($_SESSION['level'] !== 'admin' && $_SESSION['level'] !== 'petugas') {
            header("Location: http://localhost/web_spp/");
        }   
    }
    public function index() {
        $this->view('pembayaran/home');
    }

    public function tambah() {
        $this->view('pembayaran/tambah');
    }
}
