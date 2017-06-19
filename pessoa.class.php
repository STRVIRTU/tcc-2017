<<<<<<< HEAD
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

=======
<?php

	class Pessoa{

		public $id_pessoa;
		public $nome;
		public $rg;
		public $nascimento;
		public $email;

		public function __construct(){
			// print "Pessoa instanciada!";
		}
			
		public function __get($var){
	        return $this->$var;
	   	}
	    public function __set($var, $valor){
	    	$this->$var = $valor;
	    }

	    public function recuperar_senha(){
			// $email = $_POST['email-rec'];
			$sql = ("SELECT senha FROM login WHERE email=?");
			$con = new Conexao();
			$stm = $con->prepare($sql);
			$stm ->bindParam(1, $this->email);
			$stm ->execute();	
			
				foreach ($stm as $linha) {
				  	$this->email=$linha['email'];
				 	$this->senha=$linha['senha'];
				  }
				  
			$para = $this->email;
			$senha = $this->senha;
			$headers = 'From: luanrohde11@gmail.com';
			$mensagem ="Recuperação da senha: $senha";
			$titulo = "Recuperacao de senha";
				
			echo $this->email;
			// if (mail($para, $titulo, $mensagem, $headers)){
			// 	echo'<p class="text text-success">Sucesso</p>';
			// 	session_destroy();
			// }else{
			// 	echo '<p class="text-danger">Email não enviado</p>';
			// 	session_destroy();
			// }
		}

		public function listar(){
			$sql = "select * from pessoa";
			$con = new Conexao();
			$stm = $con->prepare($sql);
			$stm->execute();
			return $stm;
		}


    }

>>>>>>> origin/master
?>