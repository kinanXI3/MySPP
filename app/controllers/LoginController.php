<?php 
class LoginController extends Controller {
    public function index() {
        if (isset($_SESSION['login'])) {
            header("Location: http://localhost/web_spp/");
            exit;
        }
        $this->view('login');
    }

    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $remember = isset($_POST['remember']) ?? true;

        // Coba login sebagai petugas/admin
        $data = $this->model('Petugas')->getByUsername($username);
        if (!empty($data)) {
            if (password_verify($password, $data['password'])) {
                $_SESSION['login'] = true;
                $_SESSION['username'] = $data['username'];
                $_SESSION['level'] = $data['level'];
                if ($remember) createCookie($data['username']);
                header("Location: http://localhost/web_spp/");
                exit;
            } else {
                $_SESSION['error'] = "Password salah untuk petugas/admin!";
                header("Location: http://localhost/web_spp/login");
                exit;
            }
        }

        // Coba login sebagai siswa
        $nisn = $_POST['username']; // Gunakan username sebagai nisn
        $data = $this->model('Siswa')->getByNISN($nisn);
        if (!empty($data)) {
            if (password_verify($password, $data['password'])) {
                $_SESSION['login'] = true;
                $_SESSION['nisn'] = $data['nisn'];
                $_SESSION['nama'] = $data['nama'];
                if ($remember) createCookieSiswa($data['nisn']); // Pakai fungsi khusus siswa
                header("Location: http://localhost/web_spp/");
                exit;
            } else {
                $_SESSION['error'] = "Password salah untuk siswa!";
                header("Location: http://localhost/web_spp/login");
                exit;
            }
        }

        // Kalau tidak ditemukan di kedua tabel
        $_SESSION['error'] = "Username atau NISN tidak ditemukan!";
        header("Location: http://localhost/web_spp/login");
        exit;
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();

        if (isset($_COOKIE['key'])) {
            $username = $_SESSION['username'] ?? $_SESSION['nisn'] ?? '';
            deleteCookie($username); // Asumsikan satu cookie dipakai semua jenis user
        }

        header("Location: http://localhost/web_spp/login");
        exit;
    }
}
