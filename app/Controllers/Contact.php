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

    public function sendEmail()
    {
       $email = \Config\Services::email();
       $email->setFrom('etechelper@gmail.com', 'Helper Site Etec');
       $email->setTo('mateusalbarraz6@gmail.com');
       $email->setSubject("Nome: " . $this->request->getPost('box_nome') . ", Email de: " . $this->request->getPost('box_email') . ", " . $this->request->getPost('box_assunto'));
       $email->setMessage($this->request->getPost('box_mensagem'));
       if (!$email->send())
       {
           $data = $email->printDebugger(['headers']);
           print_r($data);
       }else{
           echo "Email enviado com sucesso";
       }


    }
}