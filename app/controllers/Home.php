<?php

class Home extends Controller{

    public function index()
    {
        if($_POST){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            if($this->model('User_model')->login($username, $password)){
                $_SESSION['username'] = $username;
                header('Location: '.BASEURL.'/dashboard');
            }
        }
        $this->view('home');
    }
}