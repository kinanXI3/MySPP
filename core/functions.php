<?php 
require_once "../core/Url.php";
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

function createCookie(){
    global $db;
    $remember = hash("sha256", $data['username']);
    $db->mysqli->query
    setcookie("key", $remember, time() + 3600 * 24, "/");
}
