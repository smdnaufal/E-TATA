<?php

namespace App\Models;

use CodeIgniter\Model;

class tb_pegawaiModel extends Model
{
    protected $table = 'tb_pegawai';

    public function viewArsip($id_arsip = false)
    {
        if ($id_arsip == false) {
            return $this->findAll();
        }

        return $this->where(['id_arsip' => $id_arsip])->first();
    }
}
