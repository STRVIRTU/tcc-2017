<?php
//use PEAR2\Net\RouterOS;
require('routeros_api.class.php');
include ('pessoa.class.php');
$API = new RouterosAPI();
//$API->debug = true;
$pessoa = new Pessoa;
$i = 0;
if ($API->connect('192.168.20.31', 'admin', 'fwpmicsc*9dc')){
$dados = $pessoa->listarPendentes();
	foreach($dados as $linha)
	{	
		$API->comm("/ip/hotspot/user/add", array(
	         "name"     => $linha['nome'],
	         "password" => $linha['senha'],
	 		));
		echo $linha['nome']." incluido. <br>";
		$i++;
	}
}
echo "<br>";
echo $i." usuarios incluidos.";
$i = 0;

	
$API->disconnect();



?>