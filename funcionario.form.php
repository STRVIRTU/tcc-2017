<div class="container-fluid display-table">
	<div class="row display-table-row">
<!-- Side menu -->
		<div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top side-menu">
			<?php include_once('sidebar_admin.php'); ?>
		</div>
<!-- Main content -->
		<div class="col-md-10 col-sm-11 display-table-cell valign-top">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">
				<h1 class="text-center">Cadastro de funcionários</h1>
				<form class="center" method="POST" action="?pagina=validar_cadastro_funcionario" enctype="multipart/form-data">
					<label>Nome:</label>
					<input class="form-control" type="text" name="nome_funcionario" id="nome_funcionario"><br>
					<label>Nascimento:</label>
					<input class="form-control data" type="text" name="nascimento_funcionario" id="nascimento_funcionario"><br>
					<label>Rg:</label>
					<input class="form-control rg" type="text" name="rg_funcionario" id="rg_funcionario"><br>		
					<label>CPF:</label>
					<input class="form-control" type="text" name="cpf_funcionario" id="cpf"><br>
					<label>Cargo:</label>
					<input class="form-control" type="text" name="cargo_funcionario" id="cargo_funcionario"><br>
					<div class="input-group">
						<input class="form-control" type="text" name="email_funcionario" id="email_funcionario" placeholder="luan.rohde" aria-describedby="basic-addon2">
						<span class="input-group-addon" id="basic-addon2">@ceepcascavel.com.br</span>
				    </div><br>
					<label>Senha:</label>
					<input  class="form-control"type="password" name="senha_funcionario" id="senha_funcionario"><br>
					<input name="tipo" type="hidden" id="tipo" value="funcionario"/>
					<label>Selecione uma imagem:</label>
					<input type="file" name="foto"> <br>
					<button type="submit" class="btn btn-danger">Cadastrar</button>
				</form>
			</div>
			<div class="col-md-3">
			</div>
			
		</div>   
	</div>
</div>
<script type="text/javascript">
	jQuery(function($){
		       $(".data").mask("99/99/9999");
		       $(".rg").mask("99.999.999-9");
		       $("#cpf").mask("999.999.999-99");
		});

</script>