<?php

namespace App\Models;

use CodeIgniter\Model;

class tb_arsipModel extends Model
{
    protected $table = 'tb_arsip';
    protected $primaryKey = 'id_arsip';
    protected $allowedFields = ['kode_arsip', 'no_arsip', 'keterangan'];

    public function viewArsip($id_arsip = false)
    {
        if ($id_arsip == false) {
            return $this->findAll();
        }

        return $this->where(['id_arsip' => $id_arsip])->first();
    }
}
