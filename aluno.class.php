<?php
	include_once('pessoa.class.php');
	include_once('conexao.class.php');
	class Aluno extends Pessoa{

		public $cgm;
		public $curso;
		public $turma;
		public $idpessoa;
		public function __construct(){

			//print "Aluno instanciado!";
		}

		public function gravar(){
			try {
				echo parent::gravar();
				//echo "Gravando aluno";
				$sql = "insert into aluno (cgm, curso, turma, idpessoa) values (?,?,?,?)";
			  	$con = new Conexao();
			  	$stm = $con->prepare($sql);
			  	$stm->bindParam(1, $this->cgm);
			  	$stm->bindParam(2, $this->curso);
			  	$stm->bindParam(3, $this->turma);
			  	$stm->bindParam(4, parent::__get("idpessoa"));
			  //	$stm->bindParam(4, $this->cgm);

			 	$stm->execute();

		 	}catch(PDOExeption $e){
		 		return "<div class='danger'>".$e->getMessage()."</div>";
		 	}
	 	}
	 	  

	    public function __get($var){
	        return $this->$var;
	   	}
	    public function __set($var, $valor){
	        $this->$var = $valor;
	    }

		public function listar(){
				try {
					$sql = "select * from aluno";
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->execute();
					return $stm;

			}catch(PDOExeption $e){
		 		return "<div class='danger'>".$e->getMessage()."</div>";
		 	}
	    }
		public function validar(){
				try {
					$sql = ("select * from aluno where email=? and senha=?");
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->bindParam(1,$this->email);
					$stm->bindParam(2,$this->senha);
					$stm->execute();

					if($stm->rowCount()>0){
						return true;
					}else{
						return false;
					}
			}catch(PDOExeption $e){
		 		return "<div class='danger'>".$e->getMessage()."</div>";
		 	}
	    }
		public function carregar(){
				try{
					$sql = "select * from aluno where cgm=?";
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->bindParam(1, $this->cgm);
					$stm->execute();

						foreach ($stm as $linha) {
							$this->cgm=$linha['cgm'];
							$this->nome=$linha['nome'];
							$this->senha=$linha['senha'];
							$this->email=$linha['email'];
						}
				}catch(PDOExeption $e){
		 			return "<div class='danger'>".$e->getMessage()."</div>";
		 		}
	 	}

    }

?>