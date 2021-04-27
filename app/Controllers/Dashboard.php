<?php
namespace App\Controllers;

// IMPORTANTE:
// Nome do metodo + INT = Interface
// INT = INTERFACE
//-----------------------------------------------------------------------//
class Dashboard extends BaseController

{
    public function index()//Mostra a view do dashboard
    {
    
        echo view('Templates/admheader');
        echo view('dist/index');
        echo view('Templates/admfooter');
    }

//============================ CARROSEL =================================//
    public function CadastraCarouselImagemInt()
    {
        echo view('Templates/admheader');
        echo view('dist/ImagensCarrosel');
        echo view('Templates/admfooter');
    }

    public function CadastraCarouselImagem()
    {
        $data = [];
        $imagemModel = new \App\Models\ImagensCarrosel();
        $file = $this->request->getFile('box_foto');
        if($file->isValid())
        {
            $file->move('upload/fotos_carrosel', $file->getName());
        }
        if($this->request->getMethod() == "post")
        {
            $data = [
                "imagem_nome" => $file->getName()
            ];
            
            if($imagemModel->insert($data))
            {
                echo "<script> alert('Enviado com sucesso')</script>";
                return redirect()->to(base_url() . '/dashboard/CadastraCarouselImagemInt');
            }
        }
    }

    public function ExcluiImagemCarouselInt()
    {
        $imagemModel = new \App\Models\ImagensCarrosel();
        $data['imagens'] = $imagemModel->findAll();
        echo view('Templates/admheader');
        echo view('dist/ImagensCarroselExcluir',$data);
        echo view('Templates/admfooter');
    }


    public function ExcluiImagemCarousel($id)
    {
        $imagemModel = new \App\Models\ImagensCarrosel();
        $imagemModel->delete($id);
        return redirect()->to(base_url() . '/dashboard/ExcluiImagemCarouselInt');
    }


//============================ EVENTOS =================================//

    public function CadastraEvento()
    {
        $eventoModel = new \App\Models\Eventos();
        $data = [];
        $data['msg'] = "";
        if($this->request->getPost('box_titulo'))
        {
            $data = [
                'eventos_titulo' => $this->request->getPost('box_titulo'),
                'eventos_informacoes' => $this->request->getPost('box_informacoes'),
                'eventos_local' => $this->request->getPost('box_local'),
                'eventos_data' => $this->request->getPost('box_data'),
                'eventos_horario' => date('h:i:s')
            ];

            $data['msg'] = ($eventoModel->insert($data)) ? "Enviado com sucesso!" : "Não enviado";
           
        }
        echo view('Templates/admheader');
        echo view('dist/eventos', $data);
        echo view('Templates/admfooter');
    }


    public function ExcluiEventoInt()//Mostra o exclui evento com uma tabela e coisas cadastradas no banco
    {
        $eventoModel = new \App\Models\Eventos();
        $data['eventos'] = $eventoModel->findAll();
        echo view('Templates/admheader');
        echo view('dist/ExcluiEvento',$data);
        echo view('Templates/admfooter');
    }

    public function ExcluiEvento($id)
    {
        $eventoModel = new \App\Models\Eventos(); 
        $eventoModel->delete($id);
        return redirect()->to(base_url() . "/dashboard/ExcluiEventoInt"); 
        
    }
//============================ CURSOS =================================//

    public function CadastraCursoInt()
    {
        echo view('Templates/admheader');
        echo view('dist/CursosView');
        echo view('Templates/admfooter');
    }

  
    public function CadastraCurso()
    {
        $data = [];
        $data['msg'] = "";
        $cursosModel = new \App\Models\Cursos();

        $file = $this->request->getFile('box_foto');
        if($file->isValid())
        {
            $file->move('upload/fotos_professores', $file->getRandomName());
        }
     
        if($this->request->getPost('box_curso'))
        {
            $data = [
                'curso_nome' => $this->request->getPost('box_curso'),
                'curso_descricao' => $this->request->getPost('box_descricao'),
                'curso_horario' => $this->request->getPost('box_horario'),
                'curso_horario_fim' => $this->request->getPost('box_fim'),
                'curso_vagas' => $this->request->getPost('box_vagas'),
                'curso_professor_foto' => $file->getName(),
                'curso_professor' => $this->request->getPost('box_professor')

                   ];
            
              if ($cursosModel->insert($data))
              {
                echo "<script> alert('Curso cadastrado!') </script>";
                return redirect()->to(base_url() . '/dashboard/CadastraCursoInt');
              }
 
        }

    }

    public function ExcluiCursoInt()
    {
        $cursosModel = new \App\Models\Cursos();
        $data['cursos'] = $cursosModel->findAll();
        echo view('Templates/admheader');
        echo view('dist/ExcluiCurso', $data);
        echo view('Templates/admfooter');
    }

    public function ExcluiCurso($id)
    {
        $cursosModel = new \App\Models\Cursos();
        $cursosModel->delete($id);
        return redirect()->to(base_url() . '/dashboard/ExcluiCursoInt');

    }

//============================ PARCEIROS =================================//

    public function CadastraParceirosInt()
    {
        echo view('Templates/admheader');
        echo view('dist/ParceriasView');
        echo view('Templates/admfooter');
    }


    public function CadastraParceiro()
    {
        $parceiroModel = new \App\Models\Parceiros();
        $data = [];
        $file = $this->request->getFile('box_foto');
        if($file->isValid())
        {
            $file->move('upload/fotos_parcerias', $file->getRandomName());
        }
        if($this->request->getMethod() == "post")
        {
            $data = [
                "parceiro_nome" => $this->request->getPost('box_parceiro'),
                "parceiro_descricao" => $this->request->getPost('box_descricao'),
                "parceiro_foto" => $file->getName()
            ];
            if($parceiroModel->insert($data))
            {
                echo "<script> alert('Parceiro cadastrado com sucesso')</script>";
                return redirect()->to(base_url() . '/dashboard/CadastraParceirosInt');
            }
        }
    }

    public function ExcluiParceiroInt()
    {
        $parceiroModel = new \App\Models\Parceiros();
        $data['parceiros'] = $parceiroModel->findAll();
        echo view('Templates/admheader');
        echo view('dist/ExcluiParceiros', $data);
        echo view('Templates/admfooter');
        
    }

    public function ExcluiParceiro($id)
    {
        $parceiroModel = new \App\Models\Parceiros();
        $parceiroModel->delete($id);
        return redirect()->to(base_url() . '/dashboard/ExcluiParceiroInt');
        
    }

//============================ USUARIOS =================================//
    public function CadastraUsuarioInt()
    {
        echo view('Templates/admheader');
        echo view('dist/CadastroDeUsuario');
        echo view('Templates/admfooter'); 
    }

    public function MudarSenhaInt()
    {
        echo view('Templates/admheader');
        echo view('dist/MudarSenha');
        echo view('Templates/admfooter'); 
    }

    public function CadastraUsuario()
    {
        $loginModel = new \App\Models\LoginAdm();
        $data = array();
        if($this->request->getMethod() == "post")
        {
            if($this->request->getPost('box_pass') == $this->request->getPost('box_pass2'))
            {
                $data = [
                    'login_email' => $this->request->getPost('box_email'),
                    'login_senha' => $this->request->getPost('box_pass'),
                    'login_nome' => $this->request->getPost('box_nome')
                ];

                $retorno = ($loginModel->insert($data)) ? "<script> alert('Usuario cadastrado com sucesso'); window.location.href='./CadastraUsuarioInt' </script>" : "Nao cadastrado";
                echo $retorno;
            }else{
                echo "<script> alert('ERRO: AS SENHAS NAO ESTAO IGUAIS'); window.location.href='./CadastraUsuarioInt' </script>";
            }
        }
    }

    public function MudarSenha()
    {
        $loginModel = new \App\Models\LoginAdm();
        $atual = $loginModel->where('login_senha', $this->request->getPost('box_atual'))->first();
        $email = $loginModel->where('login_email', $this->request->getPost('box_email'))->first();

        if(!is_null($atual) && !is_null($email))
        {
            $loginModel->set('login_senha', $this->request->getPost('box_nova'));
            $loginModel->where('login_email', $this->request->getPost('box_email'));
            $loginModel->update();
            echo "<script> alert('SENHA ATUALIZADA COM SUCESSO'); window.location.href='./MudarSenhaInt'; </script>";
        }else{
            echo "<script> alert('ERRO: SENHA OU EMAIL INEXISTENTE'); window.location.href='./MudarSenhaInt'; </script>";
        }
    }
}