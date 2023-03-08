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
    public function view()
    {

        $data = [
            "title" => "view"
        ];
        return view('admin/Pegawai/view', $data);
    }
    public function edit()
    {

        $data = [
            "title" => "Edit"
        ];
        return view('admin/Pegawai/Edit', $data);
    }
    public function detail()
    {

        $data = [
            "title" => "detail"
        ];
        return view('admin/Pegawai/detail', $data);
    }
    public function invoice()
    {

        $data = [
            "title" => "invoice"
        ];
        return view('admin/invoice', $data);
    }
   

}
