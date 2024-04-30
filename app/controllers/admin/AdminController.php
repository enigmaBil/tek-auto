<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(){
        //$this->requireAdmin();

        return $this->view('admin.dashboard');
    }
}