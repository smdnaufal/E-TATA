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
}
