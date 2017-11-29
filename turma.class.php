<?php
	include_once('conexao.class.php');
    
    class Turma{


        public $nome;
        public $periodo;
        public $id_curso;
        public $data_inicio;

		public function __construct(){
			//print "Curso instanciado!";
        }
        
        
	    public function __get($var){
	        return $this->$var;
	   	}
	    public function __set($var, $valor){
	        $this->$var = $valor;
	    }

		public function gravar(){
			try{
				$sql = "insert into turma (nome, periodo, id_curso, data_inicio) values (?,?,?,?)";
			 	$con = new Conexao();
			 	$stm = $con->prepare($sql);
                 $stm->bindParam(1, $this->nome);
                 $stm->bindParam(2, $this->periodo);
                 $stm->bindParam(3, $this->id_curso);
                 $stm->bindParam(4, $this->data_inicio);
			 	$stm->execute();
			 	//echo "gravado";
			}catch(PDOExeption $e){
		 		return "<div class='danger'>".$e->getMessage()."</div>";
		 	}
	 	}
	 	  

		public function listar(){
			try{
				$sql = "select * from turma";
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