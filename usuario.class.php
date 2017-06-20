<?php
	class Usuario{
	  private $id;
	  private $nome;
	  private $senha;
	  private $tipo;

	  public function __get($var){
	  	return $this->$var;
	  }

	  public function __set($var, $valor){
	  	$this->$var = $valor;
	  }

	  public function gravar(){
	  	$sql = "insert into usuario (nome, senha, tipo) values (?,?,?)";
	  	$con = new Conexao();
	  	$stm = $con->prepare($sql);
	  	$stm->bindParam(1, $this->nome);
	  	$stm->bindParam(2, $this->senha);
	  	$stm->bindParam(3, $this->tipo);

	  	$stm->execute();
	  }
	}
?>