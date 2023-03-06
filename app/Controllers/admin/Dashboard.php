<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
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

}
