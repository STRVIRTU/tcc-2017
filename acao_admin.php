	<?php

	include_once('aluno.class.php');
	include_once('pessoa.class.php');
	include_once('funcionario.class.php');
	
	$id = $_POST['id'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	$aluno = new Aluno();
	$aluno->__set("idpessoa",$id); 
	 
	$funcionario = new Funcionario;
	$funcionario->__set('idpessoa', $id);

	$pessoa = new Pessoa();
	$pessoa->__set("id",$id);
	$pessoa->__set('usuario', $usuario);
	$pessoa->__set("senha", $senha);

	if(@$_POST['acao'] == 'excluir'){
	   	$funcionario->excluir();
	   	$aluno->excluir();
	    $pessoa->excluir();
	    
	   	header("Location: ?pagina=admin");
	}elseif(@$_POST['acao'] == 'alterar') {
		$pessoa->alterar();
		 echo "<script>window.history.back();</script>";
	}
?>