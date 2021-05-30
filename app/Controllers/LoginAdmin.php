<?php

namespace App\Controllers;

use InvalidArgumentException;

class LoginAdmin extends BaseController
{
    public function index()
    {
        echo view('pages/admin');
    }

    public function VerificaLogin()
    {
        $data['errorValidation'] = "";
        $loginModel = new \App\Models\LoginAdm();
        $email = $this->request->getPost('box_email');
        $result = $loginModel->where('login_email', $email)->first();
        $result2 = $loginModel->where('login_senha', md5($this->request->getPost('box_senha')))->first();

        if(is_null($result) || is_null($result2))
        {
            echo "<script> alert('ERRO: USUARIO INEXISTENTE'); window.location.href='../LoginAdmin'; </script>";
        }else{
            session_start();
            $_SESSION['usuario'] =  md5($email); 
            return redirect()->to(base_url() . "/dashboard");

        }
        
    }

    // public function UsuarioLogado()
    // {
    //     if(session()->has('login_email'))
    //     {
    //         echo "Erro, usuario logado";
    //     }else{
    //         echo " não existe usuario logado";
    //     }
    // }

    // public function Logout()
    // {
    //     session()->stop();
    //     return redirect()->to(base_url() . "/LoginAdmin");
    // }
}