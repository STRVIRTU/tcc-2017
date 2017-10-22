	<?php
	// class Conexao extends PDO{
	// 	private $host = "mysql:host=http://sql57.hostinger.com.br;dbname=u452310481_tcc";
	// 	private $user = "u452310481_admin";
	// 	private $pass = "kibras2435";

	// 	public function Conexao() {
	// 		try {
	// 			parent::__construct($this->host, $this->user, $this->pass);
	// 			parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 		} catch (PDOException $e) {
	// 			echo "Erro".$e->getMessage();
	// 		}
	// 	}
	// }

	class Conexao extends PDO{
		private $host = "mysql:host=projetolis.com.br;dbname=projetol_tcc";
		private $user = "projetol_admin";
		private $pass = "5c5f216724";

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