-<?php
	include_once('pessoa.class.php');
    include_once('conexao.class.php');
 	class Aluno{
 	private $id_aluno;
 	public $cgm;
 	public $curso;
 	public $turma;
 	public $usuario;
 	private $senha;
 	
 	/*
 	public function __construct($nome, $rg, $nascimento, $email, $cgm, $curso,$turma){
 		parent::__construct($nome, $rg, $nascimento, $email);
 		$this->setCgm($cgm);
 		$this->setCurso($curso);
 		$this->setTurma($turma);

 	}
    */
 	

    public function __get($var){
        return $this->$var;
    }
    public function __set($var, $valor){
        $this->$var = $valor;
    }
   

    public function setCgm($valor){
        $this->$cgm = $valor;
    }
    public function setCurso($valor){
        $this->$curso = $valor;
    }
    public function setTurma($valor){
        $this->$turma = $valor;
    }
 //Enviar para o banco de dados
 	public function gravar(){
		$sql = "insert into aluno (cgm, curso, turma) values (?,?,?)";
 	  	$con = new Conexao();
 	  	$stm = $con->prepare($sql);
 	  	$stm->bindParam(1, $this->cgm);
 	  	$stm->bindParam(2, $this->curso);
 	  	$stm->bindParam(3, $this->turma);
 
 	  	$stm->execute();
 	}
 	  
}
?> 