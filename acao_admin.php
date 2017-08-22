	<?php

	include_once('aluno.class.php');
	include_once('pessoa.class.php');
	
	$id = $_POST['id'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$aluno = new Aluno();
	$aluno->__set("idpessoa",$id); 
	 
	$pessoa = new Pessoa();
	$pessoa->__set("id",$id);
	$pessoa->__set('email', $email);
	$pessoa->__set("senha", $senha);

	if(@$_POST['acao'] == 'excluir'){
	    $aluno->excluir();
	    $pessoa->excluir();
	   	header("Location: ?pagina=admin");
	}elseif (@$_POST['acao'] == 'alterar') {
		$pessoa->alterar();
	   	header("Location: ?pagina=admin");
	}
?>