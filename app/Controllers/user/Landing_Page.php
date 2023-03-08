<?php

namespace App\Controllers\user;

use App\Controllers\BaseController;

class Landing_Page extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Landing Page"
        ];
        return view('user/index', $data);
    }
    public function login()
    {
        $data = [
            "title" => "login"
        ];
        return view('user/log', $data);
    }
    public function dashboard()
    {
        $data = [
            "title" => "dashboard"
        ];
        return view('user/dashboard', $data);}
}
