<?php 
include "../core/Url.php";
include "../core/Controller.php";
include "../core/BaseModel.php";
$url = new Url();
$db = new BaseModel;

function getTitle(){
    global $url;
    $title = $url->getUrl();
    if (count($title) === 3) {
        $title = $title[2].' '.$title[0];
    } elseif (count($title) === 2) {
        $title = $title[1].' '.$title[0];
    } else {
        $title = $title[0];
    }
    return ucfirst($title);
}

function urlTo($to){
    return 'http://localhost/web_spp/'.$to;
}

function checkIsNotLogin(){
    if (!isset($_SESSION['login'])) {
        header("Location: http://localhost/web_spp/login");
    }
}

function createCookie($username){
    global $db;
    $remember = hash('sha256', $username);
    $db->mysqli->query("UPDATE petugas SET remember_token = '$remember' WHERE username = '$username'");
    setcookie('key', $remember, time() + 3600 * 24, '/');
}

function createCookieSiswa($nisn){
    global $db;
    $remember = hash('sha256', $nisn);
    $db->mysqli->query("UPDATE siswa SET remember_token = '$remember' WHERE nisn = '$nisn'");
    setcookie('siswa_key', $remember, time() + 3600 * 24, '/');
}


function checkIsLogin()
{
    global $db;
    if (isset($_COOKIE['key'])) {
        $remember = $_COOKIE['key'];
        $result = $db->mysqli->query("SELECT * FROM petugas WHERE remember_token = '$remember'");
        $data = $result->fetch_assoc();
        if (!empty($result)) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $result['username'];
            $_SESSION['level'] = $result['level']; 
        } 
    }
}

function checkIsLoginSiswa(){
    global $db;
    if (isset($_COOKIE['siswa_key'])) {
        $remember = $_COOKIE['siswa_key'];
        $result = $db->mysqli->query("SELECT * FROM siswa WHERE remember_token = '$remember'");
        $data = $result->fetch_assoc();
        
        if ($result && $result->num_rows > 0) {
            $siswa = $result->fetch_assoc();
            $_SESSION['login'] = true;
            $_SESSION['nisn'] = $siswa['nisn'];
            $_SESSION['nama'] = $siswa['nama'];
        }
    }
}

function deleteCookie($username){
    global $db;
    $remember = hash('sha256', $username);
    $db->mysqli->query("UPDATE petugas SET remember_token = '' WHERE username = '$username'");
    setcookie('key', '', time() - 3600 * 24, '/');
}

function deleteCookieSiswa($nisn){
    global $db;
    $remember = hash('sha256', $nisn);
    $db->mysqli->query("UPDATE siswa SET remember_token = '' WHERE nisn = '$nisn'");
    setcookie('siswa_key', '', time() - 3600 * 24, '/');
}

function menuActive($menu){
    global $url;
    $m = $url->getUrl();
    foreach ($menu as $key){
        if ($m[0] == $key) {
            return 'active';
        }
    }


}


