<?php
class HistoryController extends Controller{
    public function __construct() {
        checkIsNotLogin();
    }
    public function index(){
        $this->view('history/home');
    }
}