<?php

namespace App\Controllers;

use App\Models\PekerjaanModel;

class Home extends BaseController
{
    protected $Pekerjaan;
    protected $table = "tb_pekerjaan";

    public function __construct()
    {
        $this->Pekerjaan = new PekerjaanModel();
    }

    public function index()
    {
        $getdata = $this->Pekerjaan->getData();
        $data = array(
            'data_pekerjaan' => $getdata,
        );
        return view('index', $data);
    }

    public function cari($id)
    {
        $getdata = $this->Pekerjaan->getPekerjaan($id);
        $data = array(
            'data_pekerjaan' => $getdata,
        );
        return view('cari', $data);
    }

    public function search($id)
    {
        $pekerjaan = $this->Pekerjaan->getPekerjaan($id);
        $nama = $this->request->getPost("nama");
        $tgl_lahir = $this->request->getPost("tgl_lahir");
        try {
            $getdata = $this->Pekerjaan->searchPekerja($nama, $tgl_lahir, $id);
            if (isset($getdata) ? $getdata : NULL) {
                $data = array(
                    'data_pekerjaan' => $pekerjaan,
                    'data_pekerja' => $getdata,
                );
                return view('hasil', $data);
            } else {
                echo "<script>alert('Data Tidak Ditemukan'); window.location='" . base_url('cari-pekerja') . "/" . $id . "'; </script>";
            }
        } catch (\Exception $e) {
            echo "<script>alert('Data Tidak Ditemukan'); window.location'" . base_url('cari-pekerja') . "/" . $id . "'; </script>";
        }
    }
}
