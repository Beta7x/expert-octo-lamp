<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'Halaman Dashboard'];
        return view('pages/dashboard', $data);
    }
}
