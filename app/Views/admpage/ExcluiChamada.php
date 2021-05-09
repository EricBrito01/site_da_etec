

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Excluir parceiro pelo ID</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Excluir Parceiros do site</li>
                        </ol>
                        <div class="card mb-4">
                     <table border="1">
                        <th>Excluir</th>
                        <th>TITULO:</th>
                        <th>LINK:</th>
                        <th>DATA:</th>

                            <div class="card-body">
                            <?php foreach($chamadas as $chamada):?>
                            <tr>
                                <td><a class="btn btn-danger" href="<?= base_url() . "/dashboard/ExcluiChamada/" . $chamada['chamada_id']?>" onclick="return confirm('Deseja realmente excluir esse dado?')">Deletar</a></td>
                                <td><?= $chamada['chamada_titulo']?></td>
                                <td><?= $chamada['chamada_link']?></td>
                                <td><?= $chamada['chamada_data']?></td>
                            </tr>
                            <?php endforeach; ?>
                            </div><br>
                     </table>
                           
                        </div>
                    </div>
                </main>
  