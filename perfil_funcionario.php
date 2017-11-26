<?php if (!isset($_SESSION['logado'])) {
          $_SESSION['error'] = " Realize o Login";
          header("Location:?pagina=login");

      }


      include_once('funcionario.class.php');
      include_once('curso.class.php');
      include_once('aluno.class.php');
      
          $func = new Funcionario;
          $func->__set('idpessoa', @$_SESSION['id_pessoa']);
          $func->carregar();
      
      
          $pessoa = new Pessoa;
          $pessoa->__set('id', @$_SESSION['id_pessoa'] );
          $pessoa->carregar();

      ?>



<div class="container perfil-aluno-div">
	<div class="row">
	
		
		
				
				<div class="perfil-aluno-conteudo">
					
					<div class="col-md-4">
						<div class="perfil-aluno-sidebar">
							<div class="perfil-aluno-foto">
								<img src="img/<?php echo $_SESSION['foto'] ?>" class="img-responsive" alt="Foto de perfil">
							</div>
							
								<a href="?pagina=logout" class="logout" style="color: #676a6c;">
										<span class="glyphicon glyphicon-log-out" aria-hidden="true" ></span>
											Sair
								</a>
					
							<div class="perfil-aluno-status">
								<p>  </p>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="perfil-aluno-info">
								<h4 class="perfil-aluno-title"><?php echo $_SESSION['nome']; ?></h4>
								<h4 class="perfil-aluno-subtitle">PROFESSOR</h4>
								<div class="perfil-aluno-grupobtn">
									<div class="btn-group btn-group-justified">
										<!-- <a href="?pagina=carteirinha" class="btn btn-primary">Carteirinha</a> -->
										<a href="#" class="btn btn-danger">Email</a>
									    <a href="https://www.google.com/intl/pt-BR/edu/classroom/" class="btn btn-warning">Google Sala de Aula</a>
									    <a href="#" class="btn btn-success">Google Drive</a>		  
									</div>
								</div>													
							</div>
						</div>

						<div class="row">
                            <div class="col-md-4">
                                <div class="perfil-aluno-editar">
                                    <h4 class="perfil-aluno-subtitle">Ocorrências</h4>    
                                        <form method="POST" action="?pagina=ocorrencia">
                                            <label>Aluno</label>
                                            <select class="form-control" name="aluno">
                                                <?php
                                                
                                                $aluno = New Aluno();
                                                $dados = $aluno->listar();

                                                foreach($dados as $linha){
                                                    echo "<option value='".$linha['idpessoa']."'>".$linha['nome']."</option>";
                                                }

                                                ?>
                                            </select><br>
                                            <label>Data</label>
                                            <input class="form-control" type="date" name="data"><br>
                                            <label>Observação</label>
                                            <textarea class="form-control" name="obs"></textarea><br>
                                            <button type="submit" class="btn btn-success">Gravar</button>
                                        </form>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="perfil-aluno-editar">
                                    <h4 class="perfil-aluno-subtitle"> Dados pessoais</h4>
                                    <label>Fone: (45) 99980-1510</label><br>
                                    <label>Email: <?php echo $pessoa->__get('email'); ?></label><br>
                                    <label>Aniversário: <?php echo $pessoa->__get('nascimento'); ?></label>
                                    <h4 class="perfil-aluno-subtitle"> Informações de cadastro</h4>	
                                    <div class="perfil-aluno-formulario">
                                        <form method="post" action="?pagina=acao_admin">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ID</label>
                                            <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $pessoa->__get('id');?>" readonly>
                                        </div>
                                        <div class="form-group">
                                        <label for="exampleSelect1">Cargo</label>
                                        <input type="text" class="form-control" name="cargo" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $func->__get('cargo');?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Usuario</label>
                                            <input type="email" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="usuario" value="<?php echo $pessoa->__get('usuario'); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Senha</label>
                                            <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="senha" value="<?php echo $pessoa->__get('senha'); ?>">
                                        </div>
                                        
                                        
                                        <div class="perfil-aluno-grupobtn">
                                            <button type="submit" class="btn btn-success btn-block" name="acao" value="alterar" formnovalidate>Alterar</button>
                                        </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		
	
</div>
