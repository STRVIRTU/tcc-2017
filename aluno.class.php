<<<<<<< HEAD
<?php
    include_once('pessoa.class.php');
    include_once('conexao.class.php');
    class Aluno extends Pessoa{

        public $cgm;
        public $curso;
        public $turma;

        public function __construct(){
            parent::__construct();
            print "Aluno instanciado!";
        }

        public function gravar(){
            $sql = "insert into aluno (cgm, curso, turma) values (?,?,?)";
            $con = new Conexao();
            $stm = $con->prepare($sql);
            $stm->bindParam(1, $this->cgm);
            $stm->bindParam(2, $this->curso);
            $stm->bindParam(3, $this->turma);
            $stm->execute();
            echo "gravado";
        }
      

        public function getCgm()
        {
            return $this->cgm;
        }
        public function setCgm($cgm)
        {
            $this->cgm = $cgm;
        }


        public function getCurso()
        {
            return $this->curso;
        }
        public function setCurso($curso)
        {
            $this->curso = $curso;
        }


        public function getTurma()
        {
            return $this->turma;
        }
        public function setTurma($turma)
        {
            $this->turma = $turma;
        }
}
=======
<?php
	include_once('pessoa.class.php');
	include_once('conexao.class.php');
	class Aluno extends Pessoa{

		public $cgm;
		public $curso;
		public $turma;

		public function __construct(){
			parent::__construct();
			print "Aluno instanciado!";
		}

		public function gravar(){
			$sql = "insert into aluno (cgm, curso, turma) values (?,?,?)";
		 	$con = new Conexao();
		 	$stm = $con->prepare($sql);
		 	$stm->bindParam(1, $this->cgm);
		 	$stm->bindParam(2, $this->curso);
		 	$stm->bindParam(3, $this->turma);
		 
		 	$stm->execute();
		 	echo "gravado";
	 	}
	 	  

	    public function __get($var){
	        return $this->$var;
	   	}
	    public function __set($var, $valor){
	        $this->$var = $valor;
	    }
    }
>>>>>>> origin/master
?>