<?php

namespace App\Controllers;

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
        $result = $loginModel->where('login_email', $this->request->getPost('box_email'))->first();
        $result2 = $loginModel->where('login_senha', $this->request->getPost('box_senha'))->first();

        if(is_null($result) || is_null($result2))
        {
            echo "<script> alert('ERRO: USUARIO INEXISTENTE'); window.location.href='../LoginAdmin'; </script>";
        }else{
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