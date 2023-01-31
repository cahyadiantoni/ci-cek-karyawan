<?php

namespace App\Models;

use CodeIgniter\Model;

class PekerjaanModel extends model{
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM tb_pekerjaan ORDER BY id_pekerjaan ASC");

        return $query->getResult();
    }

    public function getPekerjaan($id)
    {
        $builder = $this->db->table("tb_pekerjaan");
        $builder->where('id_pekerjaan', $id);

        return $builder->get()->getResult();

    }

    public function getPekerja($id)
    {
        $builder = $this->db->table("tb_pekerja");
        $builder->where('pekerjaan_id', $id);
        $builder->orderBy('id_pekerja', 'DESC');

        return $builder->get()->getResult();
    }

    public function getPekerjaById($id)
    {
        $builder = $this->db->table("tb_pekerja");
        $builder->where('id_pekerja', $id);

        return $builder->get()->getResult();
    }

    public function searchPekerja($nama, $tgl_lahir, $id)
    {
        $builder = $this->db->table("tb_pekerja");
        $builder->where('nama', $nama);
        $builder->where('tgl_lahir', $tgl_lahir);
        $builder->where('pekerjaan_id', $id);

        return $builder->get()->getResult();
    }

    public function simpanData($data)
    {
        $this->db->table("tb_pekerja")->insert($data);

        return true;
    }

    public function editData($data, $where)
    {
        $this->db->table("tb_pekerja")->update($data, $where);

        return true;
    }

    public function hapusData($where)
    {
        $this->db->table("tb_pekerja")->delete($where);

        return true;
    }
}