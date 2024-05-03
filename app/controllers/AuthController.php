<?php

namespace App\controllers;

class AuthController extends Controller
{
    public function login()
    {
        return $this->view('admin.auth.login');
    }

    public function logout()
    {
        session_destroy();

        return header('Location: /admin');
    }
}