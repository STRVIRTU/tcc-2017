<?php
	include_once('pessoa.class.php');
	include_once('conexao.class.php');
	class Aluno{

		public $cgm;
		public $curso;
		public $turma;
		public $nome;
		public $rg;
		public $nascimento;
		public $email;
		public $senha;

		public function __construct(){

			//print "Aluno instanciado!";
		}

		public function gravar(){
			$sql = "insert into aluno (nome, nascimento, rg, cgm, curso, turma, email, senha) values (?,?,?,?,?,?,?,?)";
		 	$con = new Conexao();
		 	$stm = $con->prepare($sql);
		 	$stm->bindParam(1, $this->nome);
		 	$stm->bindParam(2, $this->nascimento);
		 	$stm->bindParam(3, $this->rg);
		 	$stm->bindParam(4, $this->cgm);
		 	$stm->bindParam(5, $this->curso);
		 	$stm->bindParam(6, $this->turma);
		 	$stm->bindParam(7, $this->email);
		 	$stm->bindParam(8, $this->senha);
		 
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
			$sql = "select * from aluno";
			$con = new Conexao();
			$stm = $con->prepare($sql);
			$stm->execute();
			return $stm;
		}

		public function validar(){
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
		}

    }

?>