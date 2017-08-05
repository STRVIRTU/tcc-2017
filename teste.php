<?php
//use PEAR2\Net\RouterOS;

require('routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = true;

if ($API->connect('192.168.2.1', 'admin', '')){

$API->comm("/ip/hotspot/user/add", array(
         "name"     => "teste",
         "password" => "123",
         "profile"  => "5MB",
 		));
 		
 $API->disconnect();

}

?>