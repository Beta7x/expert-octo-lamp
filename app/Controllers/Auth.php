<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function register(): string
    {
        return view('pages/signup');
    }

    public function login(): string
    {
        $data = ['title' => 'Halaman Daftar'];
        return view('pages/login', $data);
    }
}
