<?php 
class Url {
    public function run() 
    {
        $controller = $this->getController();
        $method = $this->getMethod();
        $parameter = $this->getParameter(); 

        include "../app/controllers/$controller.php";
        $controller = new $controller;

        return call_user_func([$controller, $method], $parameter);
    }
    public function getUrl(){
        $url = explode('/', rtrim($_GET['page'], '/'));
        $url = empty($url[0]) ? ['home'] : $url;
        return $url;
    } 

    public function getController(){
        $controller = $this->getUrl();
        return ucfirst($controller[0]).'Controller'; 
    }

    public function getMethod(){
    $url = $this->getUrl();
    return isset($url[1]) ? $url[1] : 'index';
    }

    public function getParameter(){
        $url = $this->getUrl();
        return isset($url[2]) ? $url[2] : null;
    }

}