<?php
	class Conexao extends PDO{
		private $host = "mysql:host=mysql.hostinger.com.br;dbname=u452310481_tcc";
		private $user = "u452310481_admin";
		private $pass = "kibras192332";

		public function Conexao() {
			try {
				parent::__construct($this->host, $this->user, $this->pass);
			} catch (PDOException $e) {
				echo "Erro".$e->getMessage();
			}
		}
	}
?>