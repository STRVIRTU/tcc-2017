-<?php
	include_once('pessoa.class.php');
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
 	  
 	public function validar(){
	
 	 }
 	
    /**
     * Gets the value of id_aluno.
     *
     * @return mixed
     */
    public function getIdAluno()
    {
        return $this->id_aluno;
    }

    /**
     * Sets the value of id_aluno.
     *
     * @param mixed $id_aluno the id aluno
     *
     * @return self
     */
    private function _setIdAluno($id_aluno)
    {
        $this->id_aluno = $id_aluno;

        return $this;
    }

    /**
     * Gets the value of cgm.
     *
     * @return mixed
     */
    public function getCgm()
    {
        return $this->cgm;
    }

    /**
     * Sets the value of cgm.
     *
     * @param mixed $cgm the cgm
     *
     * @return self
     */
    public function setCgm($cgm)
    {
        $this->cgm = $cgm;

        return $this;
    }

    /**
     * Gets the value of curso.
     *
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Sets the value of curso.
     *
     * @param mixed $curso the curso
     *
     * @return self
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Gets the value of turma.
     *
     * @return mixed
     */
    public function getTurma()
    {
        return $this->turma;
    }

    /**
     * Sets the value of turma.
     *
     * @param mixed $turma the turma
     *
     * @return self
     */
    public function setTurma($turma)
    {
        $this->turma = $turma;

        return $this;
    }

    /**
     * Gets the value of usuario.
     *
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Sets the value of usuario.
     *
     * @param mixed $usuario the usuario
     *
     * @return self
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Gets the value of senha.
     *
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Sets the value of senha.
     *
     * @param mixed $senha the senha
     *
     * @return self
     */
    private function _setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }
}
?> 