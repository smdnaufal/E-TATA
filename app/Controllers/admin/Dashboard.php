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
    public function jabatan()
    {

        $data = [
            "title" => "jabatan"
        ];
        return view('admin/jabatan/view', $data);
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
    public function proses()
    {

        $data = [
            "title" => "proses"
        ];
        return view('admin/proses', $data);
    }

    public function tanda_tangan()
    {

        $data = [
            "title" => "tanda_tangan"
        ];
        return view('admin/tanda_tangan', $data);
    }
    public function profil()
    {

        $data = [
            "title" => "profil"
        ];
        return view('admin/profil', $data);
    }
    public function data_admin()
    {

        $data = [
            "title" => "data_admin"
        ];
        return view('admin/data_admin', $data);
    }
    public function arsip()
    {

        $data = [
            "title" => "arsip"
        ];
        return view('admin/surat/arsip', $data);
    }
    public function sifat_surat()
    {

        $data = [
            "title" => "sifat_surat"
        ];
        return view('admin/surat/sifat_surat', $data);
    }
    public function laporan()
    {

        $data = [
            "title" => "laporan"
        ];
        return view('admin/laporan', $data);
    }
   

}
