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
    public function insert()
    {
        
        $eventoModel = new \App\Models\Eventos();
        $data = [];
        $data['msg'] = "";
        if(isset($_POST['box_titulo']))
        {
            $data = [
                'eventos_titulo' => $_POST['box_titulo'],
                'eventos_informacoes' => $_POST['box_informacoes'],
                'eventos_local' => $_POST['box_local'],
                'eventos_data' => $_POST['box_data'],
                'eventos_horario' => '19h30'
            ];

            if($eventoModel->insert($data))
            {
                $data['msg'] = "Enviado com sucesso!";
            }else{
                $data['msg'] = "Não enviado";
            }

       
        }
         echo view('pages/Inserir', $data);
    }

   
}