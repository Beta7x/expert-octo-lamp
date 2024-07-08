<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/index');
    }

    public function spiner(): string
    {
        return view('partial/preloader');
    }

    public function dasboard(): string
    {
        return view('pages/dasboard');
    }
}
