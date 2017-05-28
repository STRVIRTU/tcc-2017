<?php

	class Pessoa{

		public $id_pessoa;
		public $nome;
		public $rg;
		public $nascimento;
		public $email;

		public function __construct(){
			print "Pessoa instanciada!";
		}
		
	    public function getIdPessoa()
	    {
	        return $this->id_pessoa;
	    }


	    public function getNome()
	    {
	        return $this->nome;
	    }  
	    public function setNome($nome)
	    {
	        $this->nome = $nome;
	    }


	    public function getRg()
	    {
	        return $this->rg;
	    }
	    public function setRg($rg)
	    {
	        $this->rg = $rg;
	    }


	    public function getNascimento()
	    {
	        return $this->nascimento;
	    }
	    public function setNascimento($nascimento)
	    {
	        $this->nascimento = $nascimento;
	    }


	    public function getEmail()
	    {
	        return $this->email;
	    }
	    public function setEmail($email)
	    {
	        $this->email = $email;
	    }
}

?>