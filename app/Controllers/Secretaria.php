<?php

namespace App\Controllers;

class Secretaria extends BaseController
{
    public function index()
    {
        echo view('Templates/header');
        echo view('pages/secretaria');
        echo view('Templates/footer');
    }
}