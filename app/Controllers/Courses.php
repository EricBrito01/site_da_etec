<?php

namespace App\Controllers;


class Courses extends BaseController
{
    public function index()
    {
        echo view('Templates/header');
        echo view('pages/courses');
        echo view('Templates/footer');
    }

    // public function ds()
    // {
    //     echo view('Templates/header');
    //     echo view('pages/ds');
    //     echo view('Templates/footer');
    // }
}