<?php

namespace App\Models;

use CodeIgniter\Model;

class tb_pegawaiModel extends Model
{
    protected $table = 'tb_pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $allowedFields = ['nama_lengkap', 'nip', 'jenis_kelamin','alamat','no_hp','email','tempat_lahir','tgl_lahir'];

    public function viewPegawai($id_pegawai = false)
    {
        if ($id_pegawai == false) {
            return $this->findAll();
        }

        return $this->where(['id_pegawai' => $id_pegawai])->first();
    }
}
