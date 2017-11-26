<?php
	include_once('classroom.class.php');
	include_once('funcionario.class.php');
		$nome = $_POST['nome_funcionario'];
		$nascimento = $_POST['nascimento_funcionario'];
		$rg = $_POST['rg_funcionario'];
		$cpf = $_POST['cpf'];
		$cargo = $_POST['cargo_funcionario'];
		$email = $_POST['email_funcionario'];
		$senha = $_POST['senha_funcionario'];
		$tipo = $_POST['cargo_funcionario'];
		$usuario = $_POST['email_funcionario'];
		$criacao = date('Y-m-d h:i:s');

		$class = new Classroom();
		$class->__set("name",$nome);
		$class->__set('id', $email.'@ceepcascavel.com.br');
		$class->__set('password', $senha);


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
	    $func->__set('criacao', $criacao);
	     
		// if (isset($_FILES["foto"])) {
			
		// 	if ($_FILES["foto"]["error"]) {
		// 		echo "ERRO N". $_FILES["foto"]["error"];
		// 	}

		// 	$fotoType = $_FILES["foto"]["type"];
		// 	if ($fotoType =="image/PNG" or $fotoType =="image/png" or $fotoType == "image/jpg" or $fotoType == "image/jpeg") {
		// 		move_uploaded_file($_FILES["foto"]["tmp_name"], $_FILES["name"]);
		// 		$func->__set("foto", 'img/'.$_FILES["foto"]["name"]);
		// 		$func->gravar();
		// 		$class->novoUsuario();
			   
		// 	}else{
		// 		echo "<div class='danger'>Formato Inválido</div>";
		// 	}
		// }
		echo $func->gravar();
		echo $class->novoUsuario();

?>