<?php

namespace App\controllers\admin;

use App\controllers\Controller;

class UserController extends Controller
{
    public function index(){

//        $this->requireAdmin();

        return $this->view('admin.users.index');

    }

    public function create(){
//        $this->requireAdmin();

        return $this->view('admin.users.create');
    }
}