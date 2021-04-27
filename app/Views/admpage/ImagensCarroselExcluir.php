

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Excluir imagem pelo ID</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Excluir Imagem Carrosel</li>
                        </ol>
                        <div class="card mb-4">
                        <table border="1">
                            <th>Excluir</th>
                            <th>Nome da imagem</th>
                            <div class="card-body">
                            <?php foreach($imagens as $imagem):?>
                                <tr>
                                    <td><a class="btn btn-danger" href="<?= base_url() . "/dashboard/ExcluiImagemCarousel/" . $imagem['imagem_id']?>" onclick="return confirm('Deseja realmente excluir esse dado?')">Deletar</a></td>
                                    <td><?= $imagem['imagem_nome']?></td>
                                </tr>
                            </div><br>
                            <?php endforeach;?>
                        </table>
                           
                        </div>
                    </div>
                </main>
  