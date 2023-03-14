<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\tb_jabatanModel;

class JabatanController extends BaseController
{
    protected $tb_jabatanModel;

    public function __construct()
    {
        $this->tb_jabatanModel = new tb_jabatanModel();
    }

    public function jabatan()
    {
        $jabatan = $this->tb_jabatanModel->findAll();

        $data = [
            "title" => "Data Jabatan",
            'jabatan' => $jabatan
        ];

        // $tb_jabatanModel = new \App\Models\tb_jabatanModel();

        return view('admin/jabatan', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('jabatan'), '-', true);
        $this->tb_jabatanModel->save([
            'nama_jabatan' => $this->request->getVar('jabatan'),
            'slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin/jabatan');
    }
}
