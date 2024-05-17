<?php

namespace App\controllers\admin;


use App\controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(){
//        $this->requireAdmin();

        return $this->view('admin.dashboard');
    }

    public  function bills()
    {
//        $this->requireAdmin();


        return $this->view('admin.bills.index');
    }

    public  function bookings()
    {
//        $this->requireAdmin();


        return $this->view('admin.bookings.index');
    }

    public function accessDenied()
    {
        return $this->view('admin.errors.403');
    }

}