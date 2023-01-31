<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PekerjaanModel;

class DataPekerja extends BaseController
{
    protected $Pekerjaan;
    protected $table = "tb_pekerjaan";

    public function __construct()
    {
        $this->Pekerjaan = new PekerjaanModel();
    }

    public function index($id)
    {
        $getdata = $this->Pekerjaan->getData();
        $datapekerjaan = $this->Pekerjaan->getPekerjaan($id);
        $datapekerja = $this->Pekerjaan->getPekerja($id);
        $data = array(
            'data_pekerjaan' => $getdata,
            'data_pekerjaan_filter' => $datapekerjaan,
            'data_pekerja' => $datapekerja,
        );
        if (session()->has('logged_in') == "") {
            return redirect()->to("login");
        } else {
            return view('Admin/datapekerja', $data);
        }
    }
    public function tambah($id){
        $getdata = $this->Pekerjaan->getData();
        $datapekerjaan = $this->Pekerjaan->getPekerjaan($id);
        $data = array(
            'data_pekerjaan' => $getdata,
            'data_pekerjaan_filter' => $datapekerjaan,
        );
        if (session()->has('logged_in') == "") {
            return redirect()->to("login");
        } else {
            return view('Admin/tambahpekerja', $data);
        }
    }
    
    public function simpan($id)
    {
        $nama = $this->request->getPost("nama");
        $tgl_lahir = $this->request->getPost("tgl_lahir");
        $operator = $this->request->getPost("operator");
        $keterangan = $this->request->getPost("keterangan");
        $no_npwp = $this->request->getPost("no_npwp");
        $nama_perusahaan = $this->request->getPost("nama_perusahaan");
        $alamat_perusahaan = $this->request->getPost("alamat_perusahaan");

        $data = [
            'nama' => $nama,
            'tgl_lahir' => $tgl_lahir,
            'operator' => $operator,
            'pekerjaan_id' => $keterangan,
            'npwp' => $no_npwp,
            'nama_pt' => $nama_perusahaan,
            'alamat_pt' => $alamat_perusahaan,
        ];
        try {
            $simpan = $this->Pekerjaan->simpanData($data);
            if ($simpan) {
                echo "<script>alert('Data Berhasil Disimpan'); window.location='" . base_url('/data-pekerja') ."/". $id . "'; </script>";
            } else {
                echo "<script>alert('Data Gagal Disimpan'); window.location='" . base_url('/data-pekerja') ."/". $id . "'; </script>";
            }
        } catch (\Exception $e) {
            echo "<script>alert('Data Gagal Disimpan'); window.location'" . base_url('/data-pekerja') ."/". $id . "'; </script>";
        }
    }
}
