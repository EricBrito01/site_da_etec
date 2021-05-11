
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1>Atualizar a senha </h1>
                        <form method="POST" action="./MudarSenha">
                           
            
                            <label name="txt-area">Email:</label>
                            <input type="email" name="box_email" id="" size="35" placeholder="EX: caiomalheiros@gmail.com">
            
                                
                                <br>
                                <br>
            
                            <div class="form-group">
                                <label name="dt-inicio" style="text-align: left; "  class="col-sm-12 control-label">Senha atual: </label>
                                <div class="col-sm-12">
                                    <div style="width: 200px; left: 100px; top: -32px; margin-left: 15px" class="input-group date">
                                        <input name="box_atual" type="password" class="form-control" id="exemplo" >
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
            
                                </div>
                              </div>


                              
                              <div class="form-group">
                                <label name="dt-final" style="text-align: left; " class="col-sm-12 control-label">nova senha: </label>
                                <div class="col-sm-12">
                                    <div style="width: 200px; left: 100px; top: -32px; margin-left: 15px"class="input-group date">	
                                    <input name="box_nova" type="password" class="form-control" id="exemplo" >

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
                
