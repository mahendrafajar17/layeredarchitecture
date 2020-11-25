<?php

class Dashboard extends Controller{

    public function index()
    {
        echo 'Selamat datang '.$_SESSION['username'];
    }
}