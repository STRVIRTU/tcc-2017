<?php


	include_once('conexao.class.php');
	class Pessoa{

		public $id;
		public $nome;
		public $rg;
		public $nascimento;
		public $foto;
		public $email;
		public $senha;
		public $tipo;
		public $usuario;
		public $criacao;
		public $status;

		public function __construct(){
			// print "Pessoa instanciada!";
		}
			
		public function __get($var){
	        return $this->$var;
	   	}
	    public function __set($var, $valor){
	    	$this->$var = $valor;
	    }



		public function gravar(){
			try {
				
				$sql = "select * from pessoa where usuario=?";
				$con = new Conexao();
			  	$stm = $con->prepare($sql);
			 	$stm->bindParam(1, $this->usuario);
			  	$stm->execute();

			  	if ($stm->rowCount()==0) {
			  		$_SESSION['gravar'] = true;
			  		$sql = "insert into pessoa (nome, rg, nascimento, foto, email, senha, tipo, usuario, criacao) values (?,?,?,?,?,?,?,?,?)";
					$con = new Conexao();
				  	$stm = $con->prepare($sql);
				 	$stm->bindParam(1, $this->nome);
				  	$stm->bindParam(2, $this->rg);
				  	$stm->bindParam(3, $this->nascimento);
				  	$stm->bindParam(4, $this->foto);
				  	$stm->bindParam(5, $this->email);
				  	$stm->bindParam(6, $this->senha);
				  	$stm->bindParam(7, $this->tipo);
				  	$stm->bindParam(8, $this->usuario);
				  	$stm->bindParam(9, $this->criacao);

				  	$stm->execute();

				  	$sql = ("select * from pessoa where rg=? and email=?");
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->bindParam(1,$this->rg);
					$stm->bindParam(2,$this->email);
					$stm->execute();
					foreach ($stm as $linha) {
								$_SESSION['id_pessoa']=$linha['id'];
				
					}

			  	}else{
			  		echo '<div class="alert alert-danger col-md-6 center fade in">';
					echo    '<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
					echo    '<p class="text-center">Email já existente! Por favor insira outro!.</p>';
					echo '</div>';
					$_SESSION['gravar'] = false;
			  	}
		 	}catch(PDOExeption $e){
		 		return "<div class='danger'>".$e->getMessage()."</div>";
		 	}
	 	}

	 	public function validar(){
				try {
					$sql = ("select * from pessoa where usuario=? and senha=?");
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->bindParam(1,$this->usuario);
					$stm->bindParam(2,$this->senha);
					$stm->execute();

					if($stm->rowCount()>0){
						foreach ($stm as $linha) {
							$_SESSION['tipo'] = $linha['tipo'];
							$_SESSION['usuario'] = $linha['usuario'];
							$_SESSION['nome'] = $linha['nome'];
							$_SESSION['foto'] = $linha['foto'];
						}
						return true;
					}else{
						return false;
					}
			}catch(PDOExeption $e){
		 		return "<div class='danger'>".$e->getMessage()."</div>";
		 	}
	    }

	    public function listar(){
				try {
					$sql = "select * from pessoa";
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->execute();
					return $stm;

			}catch(PDOExeption $e){
		 		return "<div class='danger'>".$e->getMessage()."</div>";
		 	}
	    }

	    public function carregar(){
				try{
					$sql = "select * from pessoa where id=?";
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->bindParam(1, $this->id);
					$stm->execute();
						foreach ($stm as $linha) {
							$this->id=$linha['id'];
							$this->nome=$linha['nome'];
							$this->email=$linha['email'];
							$this->senha=$linha['senha'];
							$this->rg=$linha['rg'];
							$this->nascimento=$linha['nascimento'];
							$this->usuario=$linha['usuario'];
						}
				}catch(PDOExeption $e){
		 			return "<div class='danger'>".$e->getMessage()."</div>";
		 		}
	 	}

	    public function recuperar_senha(){
		    	try{
					$sql = ("select * from pessoa where email=?");
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm ->bindParam(1, $this->email);
					$stm ->execute();	

						if ($stm->rowCount()>0){
							foreach ($stm as $linha) {
							  	$this->email=$linha['email'];
							 	$this->senha=$linha['senha'];
							}
						  
							$para = $this->email;
							$senha = $this->senha;
							$headers = 'From: SGU Ceep <admtcc@ceepcascavel.com.br>';
						
							$mensagem ="Sua senha atual é: $senha";
							$titulo = "Recuperacao de senha";
						
					
							if (mail($para, $titulo, $mensagem, $headers)){
								// echo "<div class='alert alert-success col-md-6 center' role='alert'><p class='text-center'>Email enviado</p></div>";
								echo '<div class="alert alert-success col-md-6 center fade in">';
								echo    '<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
								echo    '<p class="text-center">Email enviado com sucesso! Consulte seu email para recuperar sua senha.</p>';
								echo '</div>';
							}else{
								
								echo '<div class="alert alert-danger col-md-6 center fade in">';
								echo    '<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
								echo    '<p class="text-center">Email não enviado!</p>';
								echo '</div>';
								
							}
						}else{
							echo '<div class="alert alert-warning col-md-6 center fade in">';
							echo    '<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
							echo    '<p class="text-center">Email não cadastrado!</p>';
							echo '</div>';
						}
				}catch(PDOExeption $e){
			 		return "<div class='danger'>".$e->getMessage()."</div>";
			 	}
		}

		public function excluir(){
				try{
					$sql = "delete from pessoa where id=?";
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->bindParam(1, $this->id );
						if ($stm->execute()) {
							
							return '<div class="sucess">Aluno excluido com sucesso!</div>';
						}
					
				}catch(PDOExeption $e){
		 			return "<div class='danger'>".$e->getMessage()."</div>";
		 		}
	 	}

	 	public function alterar(){
				try{
					$sql = "update pessoa set email=?, senha=? where id=?";
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->bindParam(1, $this->email);
					$stm->bindParam(2, $this->senha);
					$stm->bindParam(3, $this->id);
						if ($stm->execute()) {
							return '<div class="sucess">Alterado com sucesso!</div>';
						}
					
				}catch(PDOExeption $e){
		 			return "<div class='danger'>".$e->getMessage()."</div>";
		 		}
	 	}

	 		public function alterarStatus(){
				try{
					$sql = "update pessoa set status=? where id=?";
					$con = new Conexao();
					$stm = $con->prepare($sql);
					$stm->bindParam(1, $this->status);
					$stm->bindParam(2, $this->id);
						if ($stm->execute()) {
							return '<div class="sucess">Alterado com sucesso!</div>';
						}
					
				}catch(PDOExeption $e){
		 			return "<div class='danger'>".$e->getMessage()."</div>";
		 		}
	 	}

	 	public function listarPendentes(){
				try {
					$sql = "select * from pessoa where status='pendente'";
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