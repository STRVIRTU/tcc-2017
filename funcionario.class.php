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

			  	if ($_SESSION['gravar'] == true) {


					
					$sql = "insert into funcionario (cargo, idpessoa) values (?,?)";
				 	$con = new Conexao();
				 	$stm = $con->prepare($sql);
				 	$stm->bindParam(1, $this->cargo);
				 	$stm->bindParam(3, $_SESSION['id_pessoa']);
				 				 
				 	if ($stm->execute()) {
				 		echo '<div class="alert alert-success col-md-6 center fade in">';
						echo    '<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
						echo    '<p class="text-center">Funcionário Gravado com sucesso</p>';
						echo '</div>';
				 	}
				 	

			  	}

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
					$sql = "select p.id, p.nome, p.nascimento, p.rg, p.senha, p.email, f.cpf, f.cargo from pessoa p join funcionario f on p.id=f.idpessoa";
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
					$sql = "select * from funcionario where idpessoa=?";
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->bindParam(1, $this->idpessoa);
					$stm->execute();

						foreach ($stm as $linha) {
							$this->idpessoa=$linha['id'];
							$this->cargo=$linha['cargo'];
						}
				}catch(PDOExeption $e){
		 			return "<div class='danger'>".$e->getMessage()."</div>";
		 		}
	 	}

	 	public function excluir(){
				try{
					$sql = "select * from funcionario where idpessoa=?";
						$con = new Conexao;
						$stm = $con->prepare($sql);
						$stm->bindParam(1, $this->idpessoa);
						$stm->execute();
						
						if ($stm->rowCount()>0) {
							$sqldel = "delete from funcionario where idpessoa=?";
							$condel = new Conexao;
							$stmdel = $condel->prepare($sqldel);
							$stmdel->bindParam(1, $this->idpessoa);
						
							 if ($stmdel->execute()) {	
							 	return '<div class="sucess">Aluno excluido com sucesso!</div>';
							 }else{
							 	return '<div class="danger">Aluno não excluído!</div>';
							 }

					}
						
				}catch(PDOExeption $e){
		 			return "<div class='danger'>".$e->getMessage()."</div>";
		 		}
					
	 	}

    }
?>