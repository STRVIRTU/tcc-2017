<!DOCTYPE html>
  <html>
  <head>
    <?php include_once('carregar_links.php'); ?>
    <title> Form Aluno </title>	
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="form-group col-sm-6">
			<form class="" method="POST" action="valida.php">
						<h1 class="form-signin-heading text-center">Cadastro de estagiário</h1>
						<label for="">Nome</label>
						<input type="text" class="form-control"  name="nome" value="" required>
                         <br/>
                         
						<label for="">Cpf</label>
						<input type="text" id="cpf" class="form-control" name="cpf" value="">
                         <br/>
                         
						<label for="">RG</label>
						<input type="text" class="form-control" name="rg" value="">
                         <br/>
                         
						<label for="">Telefone</label>
						<input type="text" id="telefone" class="form-control" name="telefone" value="">
                         <br/>
                         
						<label for="">Código</label>
						<input type="text" class="form-control"  name="idaluno" value="" readonly>
                         <br/>
                         
                        <label for="">E-mail</label>
						<input type="text" class="form-control" name="email" value="">
						<br/>
                        <br/>
						<label for="">&nbsp;</label>
						<button type="submit" class="btn">Gravar</button>
						<label for="">&nbsp;</label>
						<button type="submit" class="btn">Alterar</button>
						<label for="">&nbsp;</label>
						<button type="submit" class="btn">Excluir</button>

                        <label for="">&nbsp;</label>
						<button type="submit" class="btn">Consultar</button>
                        <br/>
                        <br/>

					<label for="">SELECIONE O CURSO:</label>
					<select name="curso" class="form-control chosen-select">
						<option value="Administração"  >Administração</option>
						<option value="Edificação">Edificação</option>
						<option value="Eletromecânica">Eletromecânica</option>
						<option value="Eletrônica">Eletrônica</option>
						<option value="Enfermagem">Enfermagem</option>
						<option value="Especialização em Enfermagem do Trabalho">Especialização em Enfermagem do Trabalho</option>
						<option value="Informática">Informática</option>
						<option value="Meio Ambiente">Meio Ambiente</option>
						<option value="Segurança do Trabalho">Segurança do Trabalho</option>
					
					</select>
				
	</form>
	</div>
</html>
