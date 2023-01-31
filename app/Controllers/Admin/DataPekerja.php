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

    public function ubah($id){
        $getdata = $this->Pekerjaan->getData();
        $datapekerja = $this->Pekerjaan->getPekerjaById($id);
        $data = array(
            'data_pekerjaan' => $getdata,
            'data_pekerja' => $datapekerja,
        );
        if (session()->has('logged_in') == "") {
            return redirect()->to("login");
        } else {
            return view('Admin/editpekerja', $data);
        }
    }

    public function edit($id)
    {
        $id_pekerja = $this->request->getPost("id_pekerja");
        $nama = $this->request->getPost("nama");
        $tgl_lahir = $this->request->getPost("tgl_lahir");
        $operator = $this->request->getPost("operator");
        $keterangan = $this->request->getPost("keterangan");
        $npwp = $this->request->getPost("npwp");
        $nama_pt = $this->request->getPost("nama_pt");
        $alamat_pt = $this->request->getPost("alamat_pt");

        $data = [
            'id_pekerja' => $id_pekerja,
            'nama' => $nama,
            'tgl_lahir' => $tgl_lahir,
            'operator' => $operator,
            'pekerjaan_id' => $keterangan,
            'npwp' => $npwp,
            'nama_pt' => $nama_pt,
            'alamat_pt' => $alamat_pt,
        ];

        $where = ['id_pekerja' => $id];
        try {
            $edit = $this->Pekerjaan->editData($data, $where);
            if ($edit) {
                echo "<script>alert('Data Berhasil Diubah'); window.location='" . base_url('/data-pekerja') ."/". $keterangan . "'; </script>";
            } else {
                echo "<script>alert('Data Gagal Diubah'); window.location='" . base_url('/data-pekerja') ."/". $keterangan . "'; </script>";
            }
        } catch (\Exception $e) {
            echo "<script>alert('Data Gagal Diubah'); window.location'" . base_url('/data-pekerja') ."/". $keterangan . "'; </script>";
        }
    }

    public function hapus($id)
    {
        $datapekerja = $this->Pekerjaan->getPekerjaById($id);
        foreach ($datapekerja as $dp):
            $id_pekerjaan = $dp->pekerjaan_id;
        endforeach;
        $where = ['id_pekerja' => $id];
        try {
            $hapus = $this->Pekerjaan->hapusData($where);
            if ($hapus) {
                echo "<script>alert('Data Berhasil Dihapus'); window.location='" . base_url('/data-pekerja') ."/". $id_pekerjaan . "'; </script>";
            } else {
                echo "<script>alert('Data Gagal Dihapus'); window.location='" . base_url('/data-pekerja') ."/". $id_pekerjaan . "'; </script>";
            }
        } catch (\Exception $e) {
            echo "<script>alert('Data Gagal Dihapus'); window.location'" . base_url('/data-pekerja') ."/". $id_pekerjaan . "'; </script>";
        }
    }
}
