<?php


namespace App\Controllers;

class Teste extends BaseController
{
    public function index()
    {
        return view('dist/Teste');
    }

    public function enviaImagem()
    {
        $file = $this->request->getFile('box_foto');
        print_r($file);
        
    }
}