<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\tb_arsipModel;

class ArsipController extends BaseController
{
    protected $tb_arsipModel;

    public function __construct()
    {
        $this->tb_arsipModel = new tb_arsipModel();
    }

    public function arsip()
    {
        $arsip = $this->tb_arsipModel->findAll();
        $data = [
            "title" => "Data Arsip",
            'arsip' => $arsip
        ];

        return view('admin/surat/viewarsip', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'keterangan' => 'is_unique[tb_arsip.keterangan,id_arsip,{id_arsip}]'
        ])) {
            session()->setFlashdata('salah', 'Data salah.');
            return redirect()->to('/admin/surat/');
        }
        $run = $this->tb_arsipModel->save([
            'kode_arsip' => $this->request->getVar('kode_arsip'),
            'no_arsip' => $this->request->getVar('no_arsip'),
            'keterangan' => $this->request->getVar('keterangan')
            
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin/surat/');
    }

    public function delete($id_arsip)
    {
        $delete = $this->tb_arsipModel->delete($id_arsip);

        if ($delete) {
            session()->setFlashdata('hapus', 'Data berhasil dihapus.');
            return redirect()->to('/admin/surat');
        }
    }

    public function edit($id_arsip)
    {
        $data = [
            'title' => 'Ubah Data',
            'arsip' => $this->tb_arsipModel->viewArsip($id_arsip)
        ];

        return view('admin/surat/edit', $data);
    }

    public function update($id_arsip)
    {
        if (!$this->validate([
            'keterangan' => 'is_unique[tb_arsip.keterangan,id_arsip,{id_arsip}]'
        ])) {
            session()->setFlashdata('salah', 'Data salah.');
            return redirect()->to('/admin/surat');
        }
        $this->tb_arsipModel->save([
            'id_arsip' => $id_arsip,
            'kode_arsip' => $this->request->getVar('kode_arsip'),
            'no_arsip' => $this->request->getVar('no_arsip'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('ubah', 'Data berhasil diubah.');

        return redirect()->to('/admin/surat');
    }
}