<?php
	include_once('conexao.class.php');
	class Disciplina{

		public $id_disciplina;
		public $nome;
		public $professor;
		public $curso;
		public $carga_horaria;

		public function __construct(){
			//print "Disciplina instanciada!";
		}

		public function gravar(){
			$sql = "insert into disciplina (nome, professor, curso, carga_horaria) values (?,?,?,?)";
		 	$con = new Conexao();
		 	$stm = $con->prepare($sql);
		 	$stm->bindParam(1, $this->nome);
			$stm->bindParam(2, $this->professor);
			$stm->bindParam(3, $this->curso);
			$stm->bindParam(4, $this->carga_horaria);
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
			$sql = "select * from disciplina";
			$con = new Conexao();
			$stm = $con->prepare($sql);
			$stm->execute();
			return $stm;
		}

    }

?>