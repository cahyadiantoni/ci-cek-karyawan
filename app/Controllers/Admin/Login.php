<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        return view('Admin/login');
    }

    public function process()
    {
        $users = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'nama_pengguna' => $dataUser->nama_pengguna,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('Admin'));
            } else {
                session()->setFlashdata('msg', 'Password Salah');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('msg', 'Username Tidak Ditemukan');
            return redirect()->to('/login');
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
