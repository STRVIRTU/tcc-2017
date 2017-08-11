<?php
//use PEAR2\Net\RouterOS;

require('routeros_api.class.php');

$API = new RouterosAPI();

$API->debug = true;

if ($API->connect('192.168.20.31', 'admin', 'fwpmicsc*9dc')){

$API->comm("/ip/hotspot/user/add", array(
         "name"     => "tccinformatica",
         "password" => "123456",
         
 		));
 		
 $API->disconnect();

}

?>