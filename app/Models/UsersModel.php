<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "tb_pengguna";
    protected $primaryKey = "id_pengguna";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pengguna', 'username', 'password', 'nama_pengguna', 'level'];
}
