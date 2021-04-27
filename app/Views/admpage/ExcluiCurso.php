
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Excluir Curso pelo ID</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Excluir Curso</li>
                        </ol>
                        <div class="card mb-4">
                        <table border="1">
                        <th>Excluir</th>
                        <th>Nome do curso</th>
                        <th>Horario do curso</th>
                        <th>Horario fim do curso</th>
                        <th>Foto do coordenador</th>
                        <th>Nome do professor</th>
                        <th>Descrição do curso</th>
                        <th>Numero de vagas</th>
                        
                            <div class="card-body">
                            <?php foreach($cursos as $curso):?>
                            <tr>
                            <td><a class="btn btn-danger" href="<?= base_url() . "/dashboard/ExcluiCurso/" . $curso['curso_id']?>" onclick="return confirm('Deseja realmente excluir esse dado?')">Deletar</a></td>
                           <td><?= $curso['curso_nome']?></td>
                           <td><?= $curso['curso_horario']?></td>
                           <td><?= $curso['curso_horario_fim']?></td>
                           <td><?= $curso['curso_professor_foto']?></td>
                           <td><?= $curso['curso_professor']?></td>
                           <td><?= $curso['curso_descricao']?></td>
                           <td><?= $curso['curso_vagas']?></td>
                            </div><br>
                            <?php endforeach;?>
                            </tr>
                        </table>
                            
                        </div>
                    </div>
                </main>
  