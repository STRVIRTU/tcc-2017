<?php
	include_once('conexao.class.php');
	class Pessoa 
	{
		
		private $id_pessoa;
		public $nome;
		public $rg;
		public $nascimento;
		/* public $foto; */
		public $email;
		private $senha;
		

		public function setNome($nome){
			$this->$nome = $nome;
		}
		public function getNome(){
			return $this->$nome;
		}

		public function setRg($rg){
			$this->$rg = $rg;
		}
		public function getRg(){
			return $this->$rg;
		}

		public function setNascimento($nascimento){
			$this->$nascimento = $nascimento;
		}
		public function getNascimento(){
			return $this->$nascimento;
		}

		public function setEmail($email){
			$this->$email = $email;
		}
		public function getEmail(){
			return $this->$email;
		}

		public function recuperar_senha(){
			$sql = "select * from login where email=?";
			$con = new Conexao();
			$stm = $con->prepare($sql);
			$stm ->bindParam(1, $this->email);
			$stm ->execute();

				foreach ($stm as $linha) {
					$this->email=$linha['email'];
					$this->senha=$linha['senha'];
				}

			$para = $this->email;
			$headers = 'From: luanrohde11@gmail.com';
			$mensagem = "Recuperação da senha:".$this->senha;
			$titulo = "Recuperacao de senha";
			
			/*$titulo = "Recuperacao de senha";
			$para = "luanrohde11@gmail.com";
			$headers = "From: luanrohde11@gmail.com";
			$mensagem = "Recuperação da senha:";*/
			
			if (mail($para, $titulo, $mensagem, $headers)){
				echo'<p class="text text-success">Sucesso</p>';
			}else{
				echo '<p class="text-danger">Erro</p>';
			}

		}
	}

?>