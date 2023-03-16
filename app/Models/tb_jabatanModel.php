<?php

namespace App\Models;

use CodeIgniter\Model;

class tb_jabatanModel extends Model
{
    protected $table = 'tb_jabatan';
    protected $primaryKey = 'id_jabatan';
    protected $allowedFields = ['nama_jabatan'];

    public function viewJabatan($id_jabatan = false)
    {
        if ($id_jabatan == false) {
            return $this->findAll();
        }

        return $this->where(['id_jabatan' => $id_jabatan])->first();
    }
}
