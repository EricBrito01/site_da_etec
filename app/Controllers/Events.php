<?php

namespace App\Controllers;
use \CodeIgniter\Controller;
class Events extends BaseController
{
    public function index()
    {
        $eventoModel = new \App\Models\Eventos();
        $data['news'] = $eventoModel->findAll();
        echo view('Templates/header', $data);
        echo view('pages/events', $data);
        echo view('Templates/footer');
    }
 

   
}