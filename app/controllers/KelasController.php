<?php 
class KelasController extends Controller{
    public function __construct() {
        checkIsNotLogin();   
        if ($_SESSION['level'] !== 'admin') {
            header("Location: http://localhost/web_spp/");
        }
    }
    public function index(){
        $data = $this->model('Kelas')->getAll();
        $this->view('kelas/home', $data);
    }

    public function tambah(){
        $this->view('kelas/tambah');
    }

    public function store(){
        $data = [
            'nama_kelas' => $_POST['nama_kelas'],
            'kompetensi_keahlian' => $_POST['kompetensi_keahlian']
        ];
        $this->model('Kelas')->tambah($data);
        
        $_SESSION['success'] = 'Data Kelas berhasil ditambahkan!';
        header("Location: http://localhost/web_spp/kelas");
        exit;
    }

    public function edit($id){
        $data['kelas'] = $this->model('Kelas')->getById($id);
        $this->view('kelas/edit', $data);
    }

    public function update($id){
        $data = [
            'nama_kelas' => $_POST['nama_kelas'],
            'kompetensi_keahlian' => $_POST['kompetensi_keahlian']
        ];
        $this->model('Kelas')->update($id, $data);
        
        $_SESSION['success'] = 'Data Kelas berhasil diubah!';
        header("Location: http://localhost/web_spp/kelas");
        exit;
    }

    public function delete($id){
        $this->model('Kelas')->delete($id);

        $_SESSION['success'] = 'Data Kelas berhasil dihapus';
        header("Location: http://localhost/web_spp/kelas");
        exit;
    }

}