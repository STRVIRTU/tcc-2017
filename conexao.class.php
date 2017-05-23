<?php
	class Conexao extends PDO{
		private $host = "mysql:host=localhost;dbname=u452310481_tcc";
		private $user = "u452310481_admin";
		private $pass = "ceep123";

		public function Conexao() {
			try {
				parent::__construct($this->host, $this->user, $this->pass);
			} catch (PDOException $e) {
				echo "Erro".$e->getMessage();
			}
		}
	}
?>