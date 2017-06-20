<?php
	include_once('pessoa.class.php');
	include_once('conexao.class.php');
	class Funcionario{

		public $cpf;
		public $cargo;
		public $id_pessoa;
		public $nome;
		public $rg;
		public $nascimento;
		public $email;
		public $senha; 

		public function __construct(){
			print "Funcionario instanciado!";
		}

		public function gravar(){
			$sql = "insert into funcionario (nome, nascimento, rg, cpf, cargo, email, senha) values (?,?,?,?,?,?,?)";
		 	$con = new Conexao();
		 	$stm = $con->prepare($sql);
		 	$stm->bindParam(1, $this->nome);
		 	$stm->bindParam(2, $this->nascimento);
		 	$stm->bindParam(3, $this->rg);
		 	$stm->bindParam(4, $this->cpf);
		 	$stm->bindParam(5, $this->cargo);
		 	$stm->bindParam(6, $this->email);
		 	$stm->bindParam(7, $this->senha);
		 
		 	$stm->execute();
		 	echo "gravado";
	 	} 

	    public function __get($var){
	        return $this->$var;
	   	}
	    public function __set($var, $valor){
	        $this->$var = $valor;
	    }

	   	public function listar(){
			$sql = "select * from funcionario";
			$con = new Conexao();
			$stm = $con->prepare($sql);
			$stm->execute();
			return $stm;
		}
    }

?>