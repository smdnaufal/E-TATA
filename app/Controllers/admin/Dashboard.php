<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
<<<<<<< HEAD
        $data = [
            "title" => "Dashboard"
        ];
        return view('admin/index', $data);
=======
        return view('admin/dashboard');
>>>>>>> 90a78c1e73d958461f1c8aa4e5fe1cd9798d5fa5
    }
}
