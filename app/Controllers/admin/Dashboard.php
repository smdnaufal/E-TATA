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
}
