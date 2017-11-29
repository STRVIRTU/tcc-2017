<?php
	include_once('conexao.class.php');
	class Curso{

		public $id_curso;
		public $curso;

		public function __construct(){
			//print "Curso instanciado!";
		}

		public function gravar(){
			try{
				$sql = "insert into curso (nome_curso) values (?)";
			 	$con = new Conexao();
			 	$stm = $con->prepare($sql);
			 	$stm->bindParam(1, $this->curso);
			 
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
			try{
				$sql = "select * from curso";
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