<?php

	include_once('funcionario.class.php');
		$nome = $_POST['nome_funcionario'];
		$nascimento = $_POST['nascimento_funcionario'];
		$rg = $_POST['rg_funcionario'];
		$cpf = $_POST['cpf_funcionario'];
		$cargo = $_POST['cargo_funcionario'];
		$email = $_POST['email_funcionario'];
		$senha = $_POST['senha_funcionario'];



		$func = new Funcionario();
		$func->__set("nome",$nome);  
	    $func->__set("nascimento",$nascimento);  
	    $func->__set("rg",$rg);
	    $func->__set("cpf",$cpf);  
	    $func->__set("cargo",$cargo);  
	    $func->__set("email",$email);  
	    $func->__set("senha",$senha);
	    $func->gravar();
	
	    header("Location:?pagina=admin");
?>