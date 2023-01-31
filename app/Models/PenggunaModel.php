<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends model{
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM tb_pengguna ORDER BY id_pengguna ASC");

        return $query->getResult();
    }
}