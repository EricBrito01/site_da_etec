<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        echo view('Templates/header');
        echo view('pages/about');
        echo view('Templates/footer');
    }
}