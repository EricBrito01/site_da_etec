
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1>Cadastro de Parceiros </h1>
                        <form action="./CadastraParceiro" method="POST" enctype="multipart/form-data">
                            Nome do Parceiro: <input for="nome-event" class="field" name="box_parceiro" placeholder="EX: Microsoft" size="35"><br><br>
            
                            Logo/foto:<input type="file" name="box_foto" accept="image/png, image/jpeg"><br><br>

                            <label name="txt-area">Descrição </label><br>
                            <textarea class="field" name="box_descricao" cols="95" rows="8" placeholder="Digite a descrição aqui...">				
                            </textarea>
            
                            <input type="submit" value="Cadastrar" class="btn btn-success">
                            <button id="Limpar" name="btn-limpar" type="reset" class="btn btn-danger">Limpar</button>
                    </div>
                        </div>
                       
                </main>
                
