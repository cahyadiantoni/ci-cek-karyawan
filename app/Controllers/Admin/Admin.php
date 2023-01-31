<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PekerjaanModel;

class Admin extends BaseController
{
    protected $Pekerjaan;
    protected $table = "tb_pekerjaan";

    public function __construct()
    {
        $this->Pekerjaan = new PekerjaanModel();
    }

    public function index()
    {
        $getdata = $this->Pekerjaan->getdata();
        $data = array(
            'data_pekerjaan' => $getdata,
        );
        if (session()->has('logged_in') == "") {
            return redirect()->to("login");
        } else {
            return view('Admin/dashboard', $data);
        }
    }
}
