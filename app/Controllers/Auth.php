<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('isLoggedIn') === true) {
            return redirect()->to(site_url('users'));
        }

        return view('auth/login', ['title' => 'Staff login | LabDesk POS']);
    }

    public function attempt()
    {
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (! $this->validate($rules)) {
            return view('auth/login', ['title' => 'Staff login | LabDesk POS']);
        }

        $username = trim((string) $this->request->getPost('username'));
        $password = (string) $this->request->getPost('password');
        $user = (new UserModel())->where('username', $username)->first();

        if (! $user || ! password_verify($password, $user['password'])) {
            session()->setFlashdata('error', 'The username or password is incorrect.');
            return view('auth/login', ['title' => 'Staff login | LabDesk POS']);
        }

        session()->regenerate(true);
        session()->set([
            'isLoggedIn' => true,
            'userId' => $user['id'],
            'username' => $user['username'],
        ]);

        return redirect()->to(site_url('users'));
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('login'));
    }
}
