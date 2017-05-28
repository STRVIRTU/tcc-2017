<?php

	include_once('aluno.class.php');
	$cgm = $_POST['cgm'];
	$curso = $_POST['curso'];
	$turma = $_POST['turma'];

	$aluno = new Aluno();
	$aluno->setCgm($cgm);
	$aluno->setCurso($curso);
	$aluno->setTurma($turma);

	$aluno->gravar();

?>