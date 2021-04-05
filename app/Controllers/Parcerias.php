<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Parcerias extends BaseController
{
    public function index()
    {
        echo view('Templates/header');
        echo view('pages/Parcerias');
        echo view('Templates/footer');
    }
}