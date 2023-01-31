<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;
use App\Models\PekerjaanModel;

class DataPengguna extends BaseController
{
    protected $Pengguna;
    protected $Pekerjaan;
    protected $table = "tb_pengguna";

    public function __construct()
    {
        $this->Pengguna = new PenggunaModel();
        $this->Pekerjaan = new PekerjaanModel();
    }

    public function index()
    {
        $getdata = $this->Pengguna->getData();
        $dataPekerjaan = $this->Pekerjaan->getData();
        $data = array(
            'data_pengguna' => $getdata,
            'data_pekerjaan' => $dataPekerjaan,
        );
        if (session()->has('logged_in') == "") {
            return redirect()->to("login");
        } else {
            return view('Admin/datapengguna', $data);
        }
    }

    public function tambah(){
        $getdata = $this->Pekerjaan->getData();
        $data = array(
            'data_pekerjaan' => $getdata,
        );
        if (session()->has('logged_in') == "") {
            return redirect()->to("login");
        } else {
            return view('Admin/tambahpengguna', $data);
        }
    }
    
    public function simpan()
    {
        $nama_pengguna = $this->request->getPost("nama_pengguna");
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");

        $data = [
            'nama_pengguna' => $nama_pengguna,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'level' => 'Administrator',
        ];
        try {
            $simpan = $this->Pengguna->simpanData($data);
            if ($simpan) {
                echo "<script>alert('Data Berhasil Disimpan'); window.location='" . base_url('data-pengguna') . "'; </script>";
            } else {
                echo "<script>alert('Data Gagal Disimpan'); window.location='" . base_url('data-pengguna') . "'; </script>";
            }
        } catch (\Exception $e) {
            echo "<script>alert('Data Gagal Disimpan'); window.location'" . base_url('data-pengguna') . "'; </script>";
        }
    }

    public function ubah($id){
        $getdata = $this->Pekerjaan->getData();
        $datapengguna = $this->Pengguna->getPenggunaById($id);
        $data = array(
            'data_pekerjaan' => $getdata,
            'data_pengguna' => $datapengguna,
        );
        if (session()->has('logged_in') == "") {
            return redirect()->to("login");
        } else {
            return view('Admin/editpengguna', $data);
        }
    }

    public function edit()
    {
        $id_pengguna = $this->request->getPost("id_pengguna");
        $nama_pengguna = $this->request->getPost("nama_pengguna");
        $username = $this->request->getPost("username");
        $password_baru = $this->request->getPost("password_baru");

        $datapengguna = $this->Pengguna->getPenggunaById($id_pengguna);
        foreach ($datapengguna as $dp) : 
            $password_lama = $dp->password;
        endforeach;
        if (isset($password_baru) ? $password_baru : NULL)
            $password = password_hash($password_baru, PASSWORD_DEFAULT);
        else{
            $password = $password_lama;
        }

        $data = [
            'id_pengguna' => $id_pengguna,
            'nama_pengguna' => $nama_pengguna,
            'username' => $username,
            'password' => $password,
        ];

        $where = ['id_pengguna' => $id_pengguna];
        try {
            $edit = $this->Pengguna->editData($data, $where);
            if ($edit) {
                echo "<script>alert('Data Berhasil Diubah'); window.location='" . base_url('/data-pengguna') . "'; </script>";
            } else {
                echo "<script>alert('Data Gagal Diubah'); window.location='" . base_url('/data-pengguna') . "'; </script>";
            }
        } catch (\Exception $e) {
            echo "<script>alert('Data Gagal Diubah'); window.location'" . base_url('/data-pengguna') . "'; </script>";
        }
    }

    public function hapus($id)
    {
        $where = ['id_pengguna' => $id];
        try {
            $hapus = $this->Pengguna->hapusData($where);
            if ($hapus) {
                echo "<script>alert('Data Berhasil Dihapus'); window.location='" . base_url('/data-pengguna') . "'; </script>";
            } else {
                echo "<script>alert('Data Gagal Dihapus'); window.location='" . base_url('/data-pengguna') . "'; </script>";
            }
        } catch (\Exception $e) {
            echo "<script>alert('Data Gagal Dihapus'); window.location'" . base_url('/data-pengguna') . "'; </script>";
        }
    }
}
