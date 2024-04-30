<?php

namespace App\Controllers;

use App\Controllers\Controller;

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
}