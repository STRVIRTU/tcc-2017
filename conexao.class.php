	<?php
	//Para conectar ao servidor basta colocar projetolis.com.br no host!!!
	//USER = projetol_admin
	//PASS = 5c5f216724

	class Conexao extends PDO{
		private $host = "mysql:host=localhost;dbname=projetol_tcc";
		private $user = "root";
		private $pass = "";

		public function Conexao() {
			try {
				parent::__construct($this->host, $this->user, $this->pass);
				parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				echo "Erro".$e->getMessage();
			}
		}
	}

?>