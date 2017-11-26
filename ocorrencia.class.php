<?php
	include_once('conexao.class.php');
	class Ocorrencia{

		private $id_obs;
		private $id_aluno;
        private $id_funcionario;
        private $data;
        private $observacao;

		public function __construct(){
			//print "Disciplina instanciada!";
		}

	 	  
	    public function __get($var){
	        return $this->$var;
	   	}
	    public function __set($var, $valor){
	        $this->$var = $valor;
        }
        
        public function gravar(){
            try {

                $sql = "insert into ocorrencia (id_aluno, id_funcionario, data, observacao) values (?,?,?,?)";
                 $con = new Conexao();
                 $stm = $con->prepare($sql);
                 $stm->bindParam(1, $this->id_aluno);
                 $stm->bindParam(2, $this->id_funcionario);
                 $stm->bindParam(3, $this->data);
                 $stm->bindParam(4, $this->observacao);
                 $stm->execute();
             
         }catch(PDOExeption $e){
             return "<div class='danger'>".$e->getMessage()."</div>";
         }
    }

		public function listar(){
				try {
					$sql = "select * from observacao";
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