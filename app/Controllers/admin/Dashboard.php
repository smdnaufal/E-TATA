<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function login()
    {

        $data = [
            "title" => "login"
        ];
        return view('admin/login', $data);
    }
    public function index()
    {

        $data = [
            "title" => "Dashboard"
        ];
        return view('admin/index', $data);
    }
   

}
