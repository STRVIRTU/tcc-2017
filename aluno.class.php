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
				if ($_SESSION['gravar'] == true) {

					$sql = "insert into aluno (cgm, curso, turma, idpessoa) values (?,?,?,?)";
				  	$con = new Conexao();
				  	$stm = $con->prepare($sql);
				  	$stm->bindParam(1, $this->cgm);
				  	$stm->bindParam(2, $this->curso);
				  	$stm->bindParam(3, $this->turma);
				  	$stm->bindParam(4, $_SESSION['id_pessoa']);
				  //	$stm->bindParam(4, $this->cgm);

				 	if ($stm->execute()) {
				 		echo '<div class="alert alert-success col-md-6 center fade in">';
						echo    '<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
						echo    '<p class="text-center">Aluno gravado com sucesso!</p>';
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
					$sql = "select * from aluno where cgm=?";
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->bindParam(1, $this->cgm);
					$stm->execute();

						foreach ($stm as $linha) {
							$this->cgm=$linha['cgm'];
							$this->turma=$linha['turma'];
							$_SESSION['idpessoa'] = $linha['idpessoa'];
						}
						
				}catch(PDOExeption $e){
		 			return "<div class='danger'>".$e->getMessage()."</div>";
		 		}
	 	}

	 	public function excluir(){
				try{
					
						$sql = "select * from aluno where idpessoa=?";
						$con = new Conexao;
						$stm = $con->prepare($sql);
						$stm->bindParam(1, $this->idpessoa);
						$stm->execute();
						
						if ($stm->rowCount()>0) {
							$sqldel = "delete from aluno where idpessoa=?";
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