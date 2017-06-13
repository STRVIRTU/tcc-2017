<?php

	include_once('aluno.class.php');
	$cgm = $_POST['cgm'];
	$curso = $_POST['curso'];
	$turma = $_POST['turma'];

	$aluno = new Aluno();
	$aluno->__set('cgm', $_POST['cgm']);
	$aluno->__set('curso', $_POST['curso']);
	$aluno->__set('turma', $_POST['turma']);

	$aluno->gravar();

?>