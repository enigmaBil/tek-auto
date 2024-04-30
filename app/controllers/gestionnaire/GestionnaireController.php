<?php

namespace App\Controllers\Manager;

use App\Controllers\Controller;

class GestionnaireController extends Controller
{
    public function dashboard(){
        $this->requireManager();


        return $this->view('manager.dashboard');
    }
}