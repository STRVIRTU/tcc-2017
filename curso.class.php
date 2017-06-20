<?php
	include_once('conexao.class.php');
	class Curso{

		public $id_curso;
		public $curso;

		public function __construct(){
			//print "Curso instanciado!";
		}

		public function gravar(){
			$sql = "insert into curso (nome) values (?)";
		 	$con = new Conexao();
		 	$stm = $con->prepare($sql);
		 	$stm->bindParam(1, $this->curso);
		 
		 	$stm->execute();
		 	//echo "gravado";
	 	}
	 	  

	    public function __get($var){
	        return $this->$var;
	   	}
	    public function __set($var, $valor){
	        $this->$var = $valor;
	    }

		public function listar(){
			$sql = "select * from curso";
			$con = new Conexao();
			$stm = $con->prepare($sql);
			$stm->execute();
			return $stm;
		}

    }

?>