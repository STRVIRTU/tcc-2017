<?php
	include_once('pessoa.class.php');
	include_once('conexao.class.php');
	class Funcionario extends Pessoa{

		public $cargo;
		public $cpf;
		public $idpessoa;
		 

		public function __construct(){
			//print "Funcionario instanciado!";
		}

		public function gravar(){
				try{
					echo parent::gravar();
					$sql = "insert into funcionario (cargo, cpf, idpessoa) values (?,?,?)";
				 	$con = new Conexao();
				 	$stm = $con->prepare($sql);
				 	$stm->bindParam(1, $this->cargo);
				 	$stm->bindParam(2, $this->cpf);
				 	$stm->bindParam(3, parent::__get("id"));
				 				 
				 	$stm->execute();
				 	//echo "gravado";
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
					$sql = "select p.id, p.nome, p.senha, p.email, f.cgm from pessoa p join funcionario f on p.id=f.idpessoa";
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
					$sql = "delete * from funcionario where idpessoa=?";
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->bindParam(1, $this->idpessoa);
						if ($stm->execute()) {
							return '<div class="sucess">Excluido com sucesso!</div>';
						}
				}catch(PDOExeption $e){
		 			return "<div class='danger'>".$e->getMessage()."</div>";
		 		}
	 	}

    }
?>