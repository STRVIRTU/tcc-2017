<!DOCTYPE html>
<html>
<head>
	<title>MikroTik</title>
	<meta http-equiv="refresh" content="60;url=http://localhost/tccgit/tcc-2017/teste2.php"> -->
</head>
<body>

</body>
</html>


<?php
//use PEAR2\Net\RouterOS;
require('routeros_api.class.php');
include ('pessoa.class.php');
$API = new RouterosAPI();
//$API->debug = true;
$pessoa = new Pessoa;
$i = 0;
  if ($API->connect('192.168.2.1', 'admin', '')){
 // if ($API->connect('10.1.1.1', 'admin', 'fwpmicsc*9dc')){
$dados = $pessoa->listarPendentes();
	foreach($dados as $linha)
	{	
		$id = $linha['id'];

		if ($linha['tipo'] == "2") {
			$profile= "paluno";
		}elseif ($linha['tipo']=="3") {
			$profile = "pprof";
		}



		$API->comm("/ip/hotspot/user/add", array(
	         "name"     => $linha['usuario'],
	         "password" => $linha['senha'],
	         "profile" => $profile,
	 		));
		echo $linha['nome']." incluido. <br>";
		$pessoa->__set('id', $id);
		$pessoa->__set('status', 'ativo');
		$pessoa->alterarStatus();
		$i++;
	// 	echo $profile;
	 }
}
echo "<br>";
echo $i." usuarios incluidos.";
$i = 0;

	
$API->disconnect();



?>