<?php

namespace App\controllers;

use App\controllers\controller;

class SiteController extends Controller
{
    public function index(){
        return $this->view('site.home');
    }

    public function contact(){
        return $this->view('site.contact');
    }

    public function listing(){
        return $this->view('site.listing');
    }

    public function login(){
        return $this->view('site.auth.login');
    }

    public function register(){

        return $this->view('site.auth.register');
    }

}