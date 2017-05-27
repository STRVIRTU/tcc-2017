<?php

	class Pessoa 
	{
		
		private $id_pessoa;
		public $nome;
		public $rg;
		public $nascimento;
		/* public $foto; */
		public $email;
		public function __construct($nome,$rg,$nascimento,$email)
		{
			$this->setNome($nome);
			$this->setRg($rg);
			$this->setNascimento($nascimento);
			$this->setEmail($email);		
		}

		public function setNome($nome){
			$this->$nome = $nome;
		}
		public function getNome(){
			return $this->$nome;
		}

		public function setRg($rg){
			$this->$rg = $rg;
		}
		public function getRg(){
			return $this->$rg;
		}

		public function setNascimento($nascimento){
			$this->$nascimento = $nascimento;
		}
		public function getNascimento(){
			return $this->$nascimento;
		}

		public function setEmail($email){
			$this->$email = $email;
		}
		public function getEmail(){
			return $this->$email;
		}


	}

?>