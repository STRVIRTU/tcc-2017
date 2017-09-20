	<?php

	include_once('aluno.class.php');
		$nome = $_POST['nome_aluno'];
		$nascimento = $_POST['nascimento_aluno'];
		$rg = $_POST['rg_aluno'];
		$cgm = $_POST['cgm_aluno'];
		$curso = $_POST['curso_aluno'];
		$turma = $_POST['turma_aluno'];
		$email = $_POST['email_aluno'];
		$senha = $_POST['senha_aluno'];
		$usuario = $_POST['email_aluno'];
		$tipo = 2;

		$aluno = new Aluno();

	    $aluno->__set("cgm",$cgm); 
	    $aluno->__set("curso",$curso);  
	    $aluno->__set("turma",$turma);

	    $aluno->__set("nome",$nome);  
	    $aluno->__set("nascimento",$nascimento);  
	    $aluno->__set("rg",$rg);
	    $aluno->__set("email",$email.'@ceepcascavel.com.br');
	    $aluno->__set("usuario", $usuario);
	    $aluno->__set("senha",$senha);
	    $aluno->__set("tipo", $tipo);

	    if ($_FILES["foto"]["error"]) {
	    	echo "ERRO N". $_FILES["foto"]["error"];
	    }

	    $fotoType = $_FILES["foto"]["type"];
	    if ($fotoType =="image/PNG" or $fotoType =="image/png" or $fotoType == "image/jpg" or $fotoType == "image/jpeg") {
	    	move_uploaded_file($_FILES["foto"]["tmp_name"], $_FILES["name"]);
		    $aluno->__set("foto", $_FILES["foto"]["name"]);
		    $aluno->gravar();
		    header("Location: ?pagina=perfil_aluno");
	    }else{
	    	echo "<div class='danger'>Formato Inválido</div>";
	    }
	    

?>