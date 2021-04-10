<?php
namespace App\Controllers;

//IMPORTANTE:
// Nome do metodo + INT = Interface

//-----------------------------------------------------------------------//
class Dashboard extends BaseController
{
    public function index()//Mostra a view do dashboard
    {
        
        echo view('Templates/admheader');
        echo view('dist/index.html');
        echo view('Templates/admfooter');
    }

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

    public function ExcluiEvento()
    {
        $eventoModel = new \App\Models\Eventos(); //Instancia classe Eventos
        $eventoModel->delete($this->request->getPost('box_id')); //Deleta a informação a partir do ID inserido
        return redirect()->to(base_url() . "/dashboard/ExcluiEventoInt"); //Retorna para o dashboard
        
    }

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
        if($this->request->getPost('box_curso'))
        {
            $data = [
                'curso_nome' => $this->request->getPost('box_curso'),
                'curso_descricao' => $this->request->getPost('box_descricao'),
                'curso_horario' => $this->request->getPost('box_horario'),
                'curso_horario_fim' => $this->request->getPost('box_fim'),
                'curso_vagas' => $this->request->getPost('box_vagas')

                   ];
            $cursosModel->insert($data);
        }
       
    }
}