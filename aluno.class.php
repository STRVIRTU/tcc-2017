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
			  	$stm->bindParam(4, parent::__get("id"));
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
					$sql = "select p.id, p.nome, p.senha, p.email, p.nascimento, p.rg, a.turma, a.cgm, a.curso from pessoa p join aluno a on p.id=a.idpessoa";
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->execute();
					return $stm;

			}catch(PDOExeption $e){
		 		return "<div class='danger'>".$e->getMessage()."</div>";
		 	}
	    }
		
		public function carregar(){
				try{
					$sql = "select * from pessoa";
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->bindParam(1, $this->idpessoa);
					$stm->execute();
					print_r($sql);

						foreach ($stm as $linha) {
							$this->idpessoa=$linha['id'];
						}
				}catch(PDOExeption $e){
		 			return "<div class='danger'>".$e->getMessage()."</div>";
		 		}
	 	}

	 	public function excluir(){
				try{
					$sql = "delete from aluno where idpessoa=?";
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->bindParam(1, $this->idpessoa);
						if ($stm->execute()) {
							parent::excluir();
							return '<div class="sucess">Aluno excluido com sucesso!</div>';
						}
					
				}catch(PDOExeption $e){
		 			return "<div class='danger'>".$e->getMessage()."</div>";
		 		}
	 	}


    }

?>