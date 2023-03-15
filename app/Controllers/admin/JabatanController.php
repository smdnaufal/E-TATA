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

        return view('admin/jabatan/view', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama_jabatan' => 'is_unique[tb_jabatan.nama_jabatan,id_jabatan,{id_jabatan}]'
        ])) {
            session()->setFlashdata('salah', 'Data salah.');
            return redirect()->to('/admin/jabatan');
        }

        $slug = url_title($this->request->getVar('nama_jabatan'), '-', true);
        $this->tb_jabatanModel->save([
            'nama_jabatan' => $this->request->getVar('nama_jabatan'),
            'slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin/jabatan');
    }

    public function delete($id_jabatan)
    {
        $delete = $this->tb_jabatanModel->delete($id_jabatan);

        if ($delete) {
            session()->setFlashdata('hapus', 'Data berhasil dihapus.');
            return redirect()->to('/admin/jabatan');
        }
    }

    public function edit($id_jabatan)
    {
        $data = [
            'title' => 'Ubah Data',
            'jabatan' => $this->tb_jabatanModel->viewJabatan($id_jabatan)
        ];

        return view('admin/jabatan/edit', $data);
    }

    public function update($id_jabatan)
    {
        if (!$this->validate([
            'nama_jabatan' => 'is_unique[tb_jabatan.nama_jabatan,id_jabatan,{id_jabatan}]'
        ])) {
            session()->setFlashdata('salah', 'Data salah.');
            return redirect()->to('/admin/jabatan');
        }

        $slug = url_title($this->request->getVar('nama_jabatan'), '-', true);
        $this->tb_jabatanModel->save([
            'id_jabatan' => $id_jabatan,
            'nama_jabatan' => $this->request->getVar('nama_jabatan'),
            'slug' => $slug
        ]);

        session()->setFlashdata('ubah', 'Data berhasil diubah.');

        return redirect()->to('/admin/jabatan');
    }
}