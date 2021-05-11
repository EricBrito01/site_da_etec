<?php


namespace App\Controllers;

class EsqueceuAsenha extends BaseController
{
    public function index()
    {
        echo view('pages/EsqueceuAsenha');
    }

    public function VerificaEmail()
    {
        $loginModel = new \App\Models\LoginAdm();
        $email = $loginModel->where('login_email', $this->request->getPost('box_email'))->first();
        if(is_null($email))
        {
            echo "<script> alert('ERRO: EMAIL INEXISTENTE'); window.location.href='../EsqueceuAsenha'; </script>";

        }else{
            $email = \Config\Services::email();
            $newPass = rand(200000,1000000);
            $email->setFrom('etechelper@gmail.com', 'PASS HELPER');
            $email->setTo($this->request->getPost('box_email'));

            $email->setSubject('Nova senha');
            $email->setMessage('IMPORTANTE: mudar a senha após login novamente | nova senha: ' . $newPass);

            $email->send();
            $loginModel->set('login_senha', $newPass);
            $loginModel->where('login_email', $this->request->getPost('box_email'));
            $loginModel->update();
            echo "<script> alert('EMAIL COM NOVA SENHA ENVIADO, FAVOR CHECAR A CAIXA DE ENTRADA'); window.location.href='../EsqueceuAsenha'; </script>";

        }
    }
}