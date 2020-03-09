<?php

class Login extends Controller
{
    public function index()
    {
        require 'application/views/_templates/header.php';
        require 'application/views/login/index.php';
        require 'application/views/_templates/footer.php';
    }
}
