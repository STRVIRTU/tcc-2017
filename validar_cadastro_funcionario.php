<?php

	include_once('funcionario.class.php');
		$nome = $_POST['nome_funcionario'];
		$nascimento = $_POST['nascimento_funcionario'];
		$rg = $_POST['rg_funcionario'];
		$cpf = $_POST['cpf_funcionario'];
		$cargo = $_POST['cargo_funcionario'];
		$email = $_POST['email_funcionario'];
		$senha = $_POST['senha_funcionario'];
		$tipo = $_POST['cargo_funcionario'];
		$usuario = $_POST['email_funcionario'];



		$func = new Funcionario();
		$func->__set("nome",$nome);  
	    $func->__set("nascimento",$nascimento);  
	    $func->__set("rg",$rg);
	    $func->__set("cpf",$cpf);  
	    $func->__set("cargo",$cargo);  
	    $func->__set("email",$email.'@ceepcascavel.com.br');  
	    $func->__set("senha",$senha);
	    $func->__set("tipo",$tipo);
	    $func->__set("usuario",$usuario);
	     
	     if ($_FILES["foto"]["error"]) {
	    	echo "ERRO N". $_FILES["foto"]["error"];
	    }

	    $fotoType = $_FILES["foto"]["type"];
	    if ($fotoType =="image/PNG" or $fotoType =="image/png" or $fotoType == "image/jpg" or $fotoType == "image/jpeg") {
	    	move_uploaded_file($_FILES["foto"]["tmp_name"], $_FILES["name"]);
		    $func->__set("foto", $_FILES["foto"]["name"]);
		    $func->gravar();
		    header("Location: ?pagina=perfil_funcionario");
	    }else{
	    	echo "<div class='danger'>Formato Inválido</div>";
	    }
	    
?>