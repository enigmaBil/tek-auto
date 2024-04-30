<?php

namespace App\Controllers\User;

use App\Controllers\Controller;

class UserController extends Controller
{
    public function dashboard(){
        $this->requireClient();


        return $this->view('user.dashboard');
    }
}