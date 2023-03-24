<?php

namespace App\Models;

use CodeIgniter\Model;

class tb_detailPegawaiModel extends Model
{
    protected $table = 'tb_detail_pegawai';
    protected $primaryKey = 'id_detail_pegawai';
    protected $allowedFields = ['password'];

    public function viewdetailPegawai($id_pegawai = false)
    {
        if ($id_pegawai == false) {
            return $this->select('*')
                ->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_detail_pegawai.id_pegawai')
                ->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_detail_pegawai.id_jabatan')
                ->join('tb_level', 'tb_level.id_level = tb_detail_pegawai.id_level')
                ->get();
        }

        return $this->select('*')
            ->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_detail_pegawai.id_pegawai')
            ->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_detail_pegawai.id_jabatan')
            ->join('tb_level', 'tb_level.id_level = tb_detail_pegawai.id_level')
            ->where(['tb_detail_pegawai.id_pegawai' => $id_pegawai])->first();
    }
}
