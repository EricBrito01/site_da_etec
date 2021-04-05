<?php

namespace App\Controllers;

class ExcluiEvento extends BaseController
{
    public function index()
    {
        $eventoModel = new \App\Models\Eventos();
        $data['eventos'] = $eventoModel->findAll();
        $data['msg'] = "Deletado com sucesso";
        echo view('Templates/admheader');
        echo view('dist/ExcluiEvento',$data);
        echo view('Templates/admfooter');
    }

    public function Exclui()
    {
        $eventoModel = new \App\Models\Eventos();
        $data = array();
        $eventoModel->delete($this->request->getPost('box_id'));

    }
}