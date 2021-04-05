<?php

namespace App\Controllers;

class LoginAdmin extends BaseController
{
    public function index()
    {
        echo view('pages/admin');
    }
}