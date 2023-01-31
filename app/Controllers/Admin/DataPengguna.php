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
}
