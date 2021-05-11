
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1>Cadastro de Cursos </h1>
                        <form action="./CadastraCurso" method="POST" enctype="multipart/form-data">
                            Nome do Curso: <input for="nome-event" class="field" name="box_curso" placeholder="EX: Desenvolvimento de sistemas" size="35"><br>
            
                            <label name="txt-area">Descrição do Curso </label><br>
                            <textarea class="field" name="box_descricao" cols="95" rows="8" placeholder="Digite a descrição aqui...">				
                            </textarea>
            
                                
                                <br>
                                <br>
            
                            <div class="form-group">
                                <label name="dt-inicio" style="text-align: left; "  class="col-sm-12 control-label">Inicio do curso: </label>
                                <div class="col-sm-12">
                                    <div style="width: 200px; left: 100px; top: -32px; margin-left: 15px" class="input-group date">
                                        <input name="box_horario" type="time" class="form-control" id="exemplo" >
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
            
                                </div>
                              </div> 
                              Foto coordenador:<input type="file" name="box_foto" accept="image/png, image/jpeg"><br><br>
                              Capa do curso:<input type="file" name="box_capa" accept="image/png, image/jpeg"><br><br>

                              <label name="dt-inicio" style="text-align: left; "  class="col-sm-12 control-label"> Nome professor </label>
                                <div class="col-sm-12">
                                    <div style="width: 200px; left: 100px; top: -32px; margin-left: 15px" class="input-group date">
                                    <input name="box_professor" type="text" class="form-control" id="exemplo" >
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                              <div class="form-group">
                              <label name="dt-inicio" style="text-align: left; "  class="col-sm-12 control-label">Fim do curso: </label>
                                <div class="col-sm-12">
                                    <div style="width: 200px; left: 100px; top: -32px; margin-left: 15px" class="input-group date">
                                        <input name="box_fim" type="time" class="form-control" id="exemplo" >
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
            
                                </div>
                                <div class="form-group">
                              <label name="dt-inicio" style="text-align: left; "  class="col-sm-12 control-label"> nº vagas: </label>
                                <div class="col-sm-12">
                                    <div style="width: 200px; left: 100px; top: -32px; margin-left: 15px" class="input-group date">
                                        <input name="box_vagas" type="number" class="form-control" id="exemplo" >
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
            
                                </div>
                              </div>
                              <input type="submit" value="Cadastrar" class="btn btn-success">
                              <button id="Limpar" name="btn-limpar" type="reset" class="btn btn-danger">Limpar</button>
                              </form>


                    </div>
                        </div>
                       
                </main>
                
