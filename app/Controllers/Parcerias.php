<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Parcerias extends BaseController
{
    public function index()
    {
        $parceiroModel = new \App\Models\Parceiros();
        $data['parceiros'] = $parceiroModel->findAll();
        echo view('Templates/header');
        echo view('pages/Parcerias',$data);
        echo view('Templates/footer');
    }
}