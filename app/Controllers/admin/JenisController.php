<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\tb_jenisModel;

class JenisController extends BaseController
{
    protected $tb_jenisModel;

    public function __construct()
    {
        $this->tb_jenisModel = new tb_jenisModel();
    }

    public function jenis()
    {
        $jenis = $this->tb_jenisModel->findAll();
        $data = [
            "title" => "Data jenis",
            'jenis' => $jenis
        ];

        // $tb_jenisModel = new \App\Models\tb_jenisModel();

        return view('admin/surat/sifat_surat', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama_jenis' => 'is_unique[tb_jenis.nama_jenis,id_jenis,{id_jenis}]'
        ])) {
            session()->setFlashdata('salah', 'Data salah.');
            return redirect()->to('/admin/jenis');
        }

        $this->tb_jenisModel->save([
            'nama_jenis' => $this->request->getVar('nama_jenis')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin/jenis');
    }

    public function delete($id_jenis)
    {
        $delete = $this->tb_jenisModel->delete($id_jenis);

        if ($delete) {
            session()->setFlashdata('hapus', 'Data berhasil dihapus.');
            return redirect()->to('/admin/jenis');
        }
    }

    public function edit($id_jenis)
    {
        $data = [
            'title' => 'Ubah Data',
            'jenis' => $this->tb_jenisModel->viewJenis($id_jenis)
        ];

        return view('admin/surat/editjenis', $data);
    }

    public function update($id_jenis)
    {
        if (!$this->validate([
            'nama_jenis' => 'is_unique[tb_jenis.nama_jenis,id_jenis,{id_jenis}]'
        ])) {
            session()->setFlashdata('salah', 'Data salah.');
            return redirect()->to('/admin/jenis');
        }
        
        $this->tb_jenisModel->save([
            'id_jenis' => $id_jenis,
            'nama_jenis' => $this->request->getVar('nama_jenis')
        ]);

        session()->setFlashdata('ubah', 'Data berhasil diubah.');

        return redirect()->to('/admin/jenis');
    }
}