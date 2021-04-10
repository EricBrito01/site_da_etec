<?php

namespace App\Controllers;


class Administrativo extends BaseController
{
    public function index()
    {
        echo view('Templates/header');
        echo view('pages/administrativo.php');
        echo view('Templates/footer');
    }
}