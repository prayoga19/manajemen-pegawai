<?php

namespace App\Controllers;

use App\Models\UsersModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('pages/user/login');
    }

    public function process()
    {
        $users = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'email' => $email,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'email' => $dataUser->email,
                    'name' => $dataUser->name,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('pegawai'));
            } else {
                session()->setFlashdata('error', 'email & Password Salah');
                return view('pages/user/login');
            }
        } else {
            session()->setFlashdata('error', 'email & Password Salah');
            return redirect()->back();
        }
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}