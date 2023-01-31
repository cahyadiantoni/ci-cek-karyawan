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
}
