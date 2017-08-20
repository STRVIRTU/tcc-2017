<?php
	$aluno = new Aluno;
	$cgm = $con->real_escape_string($_POST['cgm_aluno']);
	$aluno->__set('cgm', $cgm);
	$aluno->carregar();
?>