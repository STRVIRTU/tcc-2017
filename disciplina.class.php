<?php
	include_once('conexao.class.php');
	class Disciplina{

		public $id_disciplina;
		public $nome;
		public $id_curso;

		public function __construct(){
			//print "Disciplina instanciada!";
		}

		public function gravar(){
				try {

					$sql = "insert into disciplina (nome, id_curso) values (?,?)";
				 	$con = new Conexao();
				 	$stm = $con->prepare($sql);
					 $stm->bindParam(1, $this->nome);
					 $stm->bindParam(2, $this->id_curso);
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
					$sql = "select c.nome_curso, c.id_curso, d.id_curso, d.nome, d.id_disciplina from curso c join disciplina d on c.id_curso=d.id_curso";
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->execute();
					return $stm;
				}catch(PDOExeption $e){
		 			return "<div class='danger'>".$e->getMessage()."</div>";
		 		}
	    }
    }
?>