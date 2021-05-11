

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Excluir evento pelo ID</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Excluir Imagem do Carrosel</li>
                        </ol>
                        <div class="card mb-4">
                        <table border="1">
                            <th>Excluir</th>
                            <th>Nome do evento</th>
                            <th>Local do evento</th>
                            <th>Data do evento</th>
                            <th>Informações do evento</th>
                            <div class="card-body">
                                <?php foreach($eventos as $evento):?>
                                    <tr>
                                        <td><a class="btn btn-danger" href="<?= base_url() . "/dashboard/ExcluiEvento/" . $evento['eventos_id']?> " onclick="return confirm('Deseja realmente excluir esse dado?')">Deletar</a></td>
                                        <td><?= $evento['eventos_titulo']?></td>
                                        <td><?= $evento['eventos_local']?></td>
                                        <td><?= $evento['eventos_data']?></td>
                                        <td><?= $evento['eventos_informacoes']?></td>                                    
                                    </tr>
                                <?php endforeach; ?>
                            </div><br>
                            </table>
                        </div>
                    </div>
                </main>
  