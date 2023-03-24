<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\tb_pegawaiModel;
use App\Models\tb_detailPegawaiModel;

class PegawaiController extends BaseController
{
    protected $db;
    protected $tb_pegawaiModel;
    protected $tb_detailPegawaiModel;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->tb_pegawaiModel = new tb_pegawaiModel();
        $this->tb_detailPegawaiModel = new tb_detailPegawaiModel();
    }

    public function pegawai()
    {
        $builder = $this->db->table('tb_detail_pegawai');
        $builder->select('*');
        $builder->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_detail_pegawai.id_pegawai');
        $builder->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_detail_pegawai.id_jabatan');
        $builder->join('tb_level', 'tb_level.id_level = tb_detail_pegawai.id_level');
        $query   = $builder->get()->getResultArray();

        $level = $this->db->table('tb_level');
        $easy = $level->get()->getResultArray();

        $jabatan = $this->db->table('tb_jabatan');
        $tinggi = $jabatan->get()->getResultArray();

        $data = [
            "title" => "Data Pegawai",
            'query' => $query,
            'easy' => $easy,
            'tinggi' => $tinggi
        ];

        return view('admin/pegawai/index', $data);
    }

    public function save()
    {
        $builder = $this->db->table('tb_pegawai');
        $close = $this->db->table('tb_detail_pegawai');

        if (!$this->validate([
            'nama_lengkap' => 'is_unique[tb_pegawai.nama_lengkap,id_pegawai,{id_pegawai}]',
            'password' => 'is_unique[tb_detail_pegawai.password,id_detail_pegawai,{id_detail_pegawai}]',
            'nip' => 'is_unique[tb_pegawai.nip,id_pegawai,{id_pegawai}]',
            'no_hp' => 'is_unique[tb_pegawai.no_hp,id_pegawai,{id_pegawai}]',
            'email' => 'is_unique[tb_pegawai.email,id_pegawai,{id_pegawai}]'
        ])) {
            session()->setFlashdata('salah', 'Data salah.');
            return redirect()->to('/admin/pegawai');
        }

        $data = [
            'id_pegawai'  => '',
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nip' => $this->request->getVar('nip'),
            'jenis_kelamin' => $this->request->getVar('gender'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
        ];

        $tambah = $builder->insert($data);
        $user = $this->db->insertID();

        if ($tambah) {

            $data1 = [
                'id_detail_pegawai'  => '',
                'id_pegawai' => $user,
                'id_jabatan' => $this->request->getVar('jabatan'),
                'id_level' => $this->request->getVar('level'),
                'password' => $this->request->getVar('password')
            ];
            $close->insert($data1);
        }

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin/Pegawai');
    }

    public function delete($id_pegawai)
    {
        $builder = $this->db->table('tb_pegawai');
        $close = $this->db->table('tb_detail_pegawai');

        $delete = $close->delete(['id_pegawai' => $id_pegawai]);

        if ($delete) {
            $hapus = $builder->delete(['id_pegawai' => $id_pegawai]);
        }
        session()->setFlashdata('hapus', 'Data berhasil dihapus.');
        return redirect()->to('/admin/Pegawai');
    }

    public function edit($id_pegawai)
    {
        $level = $this->db->table('tb_level');
        $easy = $level->get()->getResultArray();

        $jabatan = $this->db->table('tb_jabatan');
        $tinggi = $jabatan->get()->getResultArray();

        $data = [
            'title' => 'Ubah Data',
            'pegawai' => $this->tb_detailPegawaiModel->viewdetailPegawai($id_pegawai),
            'easy' => $easy,
            'tinggi' => $tinggi
        ];

        return view('admin/pegawai/editPegawai', $data);
    }

    public function update($id_pegawai)
    {

        if (!$this->validate([
            'nama_lengkap' => 'is_unique[tb_pegawai.nama_lengkap,id_pegawai,{id_pegawai}]',
            'nip' => 'is_unique[tb_pegawai.nip,id_pegawai,{id_pegawai}]',
            'no_hp' => 'is_unique[tb_pegawai.no_hp,id_pegawai,{id_pegawai}]',
            'email' => 'is_unique[tb_pegawai.email,id_pegawai,{id_pegawai}]'
        ])) {
            session()->setFlashdata('salah', 'Data salah.');
            return redirect()->to('/admin/Pegawai');
        }

        $done = $this->tb_detailPegawaiModel->save([
            'id_detail_pegawai' => $this->request->getVar('id_detail'),
            'id_pegawai' => $id_pegawai,
            'id_jabatan' => $this->request->getVar('jabatan'),
            'id_level' => $this->request->getVar('level'),
            'password' => $this->request->getVar('password')
        ]);

        if ($done) {
            $this->tb_pegawaiModel->save([
                'id_pegawai' => $id_pegawai,
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'nip' => $this->request->getVar('nip'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'alamat' => $this->request->getVar('alamat'),
                'no_hp' => $this->request->getVar('no_hp'),
                'email' => $this->request->getVar('email'),
                'tempat_lahir' => $this->request->getVar('tempat_lahir'),
                'tgl_lahir' => $this->request->getVar('tgl_lahir')
            ]);
        }

        session()->setFlashdata('ubah', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin/Pegawai');
    }
}
