<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        echo view('Templates/header');
        echo view('pages/contact');
        echo view('Templates/footer');
    }
}