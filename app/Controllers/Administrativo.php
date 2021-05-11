<?php

namespace App\Controllers;


class Administrativo extends BaseController
{
    public function index()
    {
        echo view('Templates/header');
        echo view('pages/administrativo');
        echo view('Templates/footer');
    }
}