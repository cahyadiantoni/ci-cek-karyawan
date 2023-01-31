<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends model{
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM tb_pengguna ORDER BY id_pengguna ASC");

        return $query->getResult();
    }

    public function simpanData($data)
    {
        $this->db->table("tb_pengguna")->insert($data);

        return true;
    }

    public function getPenggunaById($id)
    {
        $builder = $this->db->table("tb_pengguna");
        $builder->where('id_pengguna', $id);

        return $builder->get()->getResult();
    }

    public function editData($data, $where)
    {
        $this->db->table("tb_pengguna")->update($data, $where);

        return true;
    }
}