<?php

namespace App\Controllers;


class Courses extends BaseController
{
    public function index()
    {
        $cursoModel = new \App\Models\Cursos();
        $data['cursos'] = $cursoModel->findAll();
        echo view('Templates/header');
        echo view('pages/courses', $data);
        echo view('Templates/footer');
    }

    // public function ds()
    // {
    //     echo view('Templates/header');
    //     echo view('pages/ds');
    //     echo view('Templates/footer');
    // }
}