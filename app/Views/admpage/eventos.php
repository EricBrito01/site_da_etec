
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1>Cadastro de Eventos </h1>
                        <form method="POST">
                            Titulo do evento: <input for="nome-event" class="field" name="box_titulo" placeholder="EX: Dia Dos Professores" size="35"><br>
            
                            <label name="txt-area">Descrição do Evento </label><br>
                            <textarea class="field" name="box_informacoes" cols="95" rows="8" placeholder="Digite a descrição aqui...">				
                            </textarea>
            
                                
                                <br>
                                <br>
            
                            <div class="form-group">
                                <label name="dt-inicio" style="text-align: left; "  class="col-sm-12 control-label">Data Inicio: </label>
                                <div class="col-sm-12">
                                    <div style="width: 200px; left: 100px; top: -32px; margin-left: 15px" class="input-group date">
                                        <input name="box_data" type="date" class="form-control" id="exemplo" >
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
            
                                </div>
                              </div>


                              
                              <div class="form-group">
                                <label name="dt-final" style="text-align: left; " class="col-sm-12 control-label">Local do evento: </label>
                                <div class="col-sm-12">
                                    <div style="width: 200px; left: 100px; top: -32px; margin-left: 15px"class="input-group date">	
                                    <input for="nome-event" class="field" name="box_local" placeholder="EX: ETEC ERMELINDA" size="30"><br>
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
            
                                </div>
                              </div>
                              <input type="submit" value="Cadastrar" class="btn btn-success">
                              <button id="Limpar" name="btn-limpar" type="reset" class="btn btn-danger">Limpar</button>
                              </form>

                              <h2><?= $msg ?></h2>
                    </div>
                        </div>
                       
                </main>
                
