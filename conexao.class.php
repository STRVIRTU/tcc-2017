<?php
	class Conexao extends PDO{
		private $host = "mysql:host=localhost;dbname=db_registros";
		private $user = "root";
		private $pass = "";

		public function Conexao() {
			try {
				parent::__construct($this->host, $this->user, $this->pass);
			} catch (PDOException $e) {
				echo "Erro".$e->getMessage();
			}
		}
	}
?>