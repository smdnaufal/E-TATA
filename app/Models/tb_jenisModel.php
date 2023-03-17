<?php

namespace App\Models;

use CodeIgniter\Model;

class tb_jenisModel extends Model
{
    protected $table = 'tb_jenis';
    protected $primaryKey = 'id_jenis';
    protected $allowedFields = ['nama_jenis'];

    public function viewJenis($id_jenis = false)
    {
        if ($id_jenis == false) {
            return $this->findAll();
        }

        return $this->where(['id_jenis' => $id_jenis])->first();
    }
}
