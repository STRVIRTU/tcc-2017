<?php
  class Conexao extends PDO {
    private $host = "mysql:host=localhost;dbname=ceep";
    private $user = "root";
    private $pass = ""; 
    private $mail = "andrejandrey@hotmail.com";
 
    public function Conexao() {
      try {
        parent::__construct($this->host, $this->user, $this->pass);
        parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        parent::setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,'SET NAMES UTF8');
      }catch(PDOException $e) {
      	mail($this->mail, "PDOException em Sistema Agricola", $e->getMessage());
      	die("Connection Error: " . Erro::traduzErro($e));
      }
    }
  }
?>