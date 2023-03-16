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
        public function berjalan()
    {
        $data = [
            "title" => "berjalan"
        ];
        return view('user/berjalan', $data);}
        public function riwayat()
    {
        $data = [
            "title" => "riwayat"
        ];
        return view('user/riwayat', $data);}
        public function profil()
        {
            $data = [
                "title" => "profil"
            ];
            return view('user/profil', $data);}
        
}

