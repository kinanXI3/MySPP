<?php
class SppController extends Controller{
    public function __construct() {
        checkIsNotLogin();   
        if ($_SESSION['level'] !== 'admin') {
            header("Location: http://localhost/web_spp/");
        }
    }
    public function index() {
    $data = $this->model('Spp')->getAll();
    $this->view('spp/home', $data);
}
    public function tambah(){
        $this->view('spp/tambah');
    }

    public function store(){
        $data = [
            'tahun' => $_POST['tahun'],
            'nominal' => $_POST['nominal']
        ];
        $this->model('Spp')->tambah($data);
        
        $_SESSION['success'] = 'Data SPP berhasil ditambahkan!';
        header("Location: http://localhost/web_spp/spp");
        exit;
    }

    public function edit($id){
        $data['spp'] = $this->model('Spp')->getById($id);
        $this->view('spp/edit', $data);
    }

    public function update($id){
        $data = [
            'tahun' => $_POST['tahun'],
            'nominal' => $_POST['nominal']
        ];
        $this->model('Spp')->update($id, $data);

        $_SESSION['success'] = 'Data SPP berhasil diubah!';
        header("Location: http://localhost/web_spp/spp");
        exit;
    }

    public function delete($id){
        $this->model('Spp')->delete($id);

        $_SESSION['success'] = 'Data SPP berhasil dihapus';
        header("Location: http://localhost/web_spp/spp");
        exit;
    }
    

    
}