<?php 
class LoginController extends Controller{
    public function index(){
        if (isset($_SESSION['login'])) {
            header("Location: http://localhost/web_spp/");
        }
        $this->view('login');
    }
    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data = $this->model('Petugas')->getByUsername($username); 
        $remember = isset($_POST['remember']) ?? true;
        print_r($remember);
        if (!empty($data)) {
            if (password_verify($password, $data['password'])) {
                $_SESSION['login'] = true;
                $_SESSION['username'] = $data['username'];
                $_SESSION['level'] = $data['level']; 
                header("Location: http://localhost/web_spp/");

                if ($remember) {
                    $remember = hash("sha256", $data['username']);
                    setcookie("key", $remember, time() + 3600 * 24, "/");
                }
            } else {
                echo "Password salah";
            }
        } else {
            echo "Username salah";
        }
    }

    public function logout(){
        session_destroy();
        session_unset();
        header("Location: http://localhost/web_spp/login");
    }

}