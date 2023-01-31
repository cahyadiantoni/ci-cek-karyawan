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
}
