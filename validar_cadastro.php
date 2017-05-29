<?php

	include_once('aluno.class.php');
	$cgm = $_POST['cgm'];
	$curso = $_POST['curso'];
	$turma = $_POST['turma'];
	$nome = $_POST['nome'];
	$rg = $_POST['rg'];
	$email = $_POST['email'];

	$aluno = new Aluno();
	$aluno->setCgm($cgm);
	$aluno->setCurso($curso);
	$aluno->setTurma($turma);

	$aluno->setNome($nome);
	$aluno->setRg($rg);
	$aluno->setEmail($email);

	$aluno->gravar();

?>