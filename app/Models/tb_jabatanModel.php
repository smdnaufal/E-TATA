<?php

namespace App\Models;

use CodeIgniter\Model;

class tb_jabatanModel extends Model
{
    protected $table = 'tb_jabatan';
    protected $primaryKey = 'id_jabatan';
    protected $allowedFields = ['nama_jabatan'];
}
