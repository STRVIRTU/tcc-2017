<div class="container-fluid">
	<div class="row">
		<div class="perfil-aluno-div center-block">
			<div class="col-md-12">
				
				<div class="perfil-aluno-conteudo">
		
					<div class="col-md-4">
						<div class="perfil-aluno-sidebar">
							<div class="perfil-aluno-foto">
								<img src="img/<?php echo $_SESSION['foto'] ?>" class="img-responsive" alt="Foto de perfil">
							</div>	
							<div class="perfil-aluno-status">
								<p>  </p>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="perfil-aluno-info">
								<h4 class="perfil-aluno-title">Vinícius Stanoga</h4>
								<h4 class="perfil-aluno-subtitle"> 4ºA informática</h4>
								<div class="perfil-aluno-grupobtn">
									<div class="btn-group btn-group-justified">
										<a href="#" class="btn btn-primary">Carteirinha</a>
										<a href="#" class="btn btn-danger">Email</a>
									    <a href="#" class="btn btn-warning">Google Sala de Aula</a>
									    <a href="#" class="btn btn-success">Google Drive</a>		  
									</div>
								</div>													
							</div>
						</div>

						<div class="row">

							<div class="perfil-aluno-editar">
								<h4 class="perfil-aluno-subtitle"> Dados pessoais</h4>
								<label>Fone: (45) 99980-1510</label><br>
								<label>Email: vinicius.stanoga@ceepcascavel.com.br</label><br>
								<label>Aniversário: 24/06/1999</label>
								<h4 class="perfil-aluno-subtitle"> Informações de cadastro</h4>	
								<div class="perfil-aluno-formulario">
									<form>
									<div class="form-group">
									  <label for="exampleSelect1">Turma</label>
									  <select class="form-control" id="exampleSelect1">
									    <option>Informática</option>
									    <option>Meio Ambiente</option>
									    <option>Administração</option>
									    <option>Edificações</option>
									    <option>Eletrônica</option>
									  </select>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Usuario</label>
									    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="usuario">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Senha</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="senha">
									</div>
									
									</form>
									<div class="perfil-aluno-grupobtn">
										<input type="submit" class="btn btn-danger btn-block" value="Salvar Alterações">
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
