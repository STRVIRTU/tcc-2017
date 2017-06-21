<!DOCTYPE html>

  <head>
    <?php include_once('carregar_links.php'); ?>
    <title> Admin </title>
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fi">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img src="img/brand.png" alt="Brand" width="50" class="img-responsive img-rounded">
          </a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right ">
          <li><a href="#"><span class="fa fa-user"></span> Sign Up</a></li>
       
          <li><a href="#"><span>
            <img src="img/avatar.png" alt="Logo" width="15" class="no-margin img-responsive img-rounded img-avatar">
            </span></a></li>
          <li><a href="#"><span class="fa fa-log-in"></span> Login</a></li>
          </div>
        </ul>
      </div>
    </nav>

    <div class="container-fluid" style="margin:0;padding:0;">
        
      <div class="row">
        <div class="col-md-2">
          <div class="box-perfil">
            <br>
     
            <br>
            <img src="img/avatar.png" class="center-block img-responsive img-rounded img-avatar" style="max-width: 115px;">         
            <br>
            <ul class="nav nav-sidebar">
              <li class="active"><a href="#">aa <span class="sr-only">(current)</span></a></li>
              <li><a href="#">bb</a></li>
              <li><a href="#">cc</a></li>
              <li><a href="#">dd</a></li>              
            </ul>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>

        <div class="col-md-10">
          <div class="btn-group">
            <p>
              <a href="?pagina=cadastro_funcionario" class="btn btn-danger" role="button">Cadastrar Funcionário</a>
              <br>
              <a href="?pagina=relatorio_funcionario" class="btn btn-danger" role="button">Relatorio Funcionário</a>
            </p>
            <p>
              <a href="?pagina=cadastro_curso" class="btn btn-danger" role="button">Cadastrar Cursos</a>
              <br>
              <a href="?pagina=relatorio_curso" class="btn btn-danger" role="button">Relatorio Cursos</a>
            </p>
            <p>
              <a href="?pagina=cadastro_disciplina" class="btn btn-danger" role="button">Cadastrar Disciplinas</a>
              <br>
              <a href="?pagina=relatorio_disciplina" class="btn btn-danger" role="button">Relatorio Disciplinas</a>         
            </p>   
            <p>
              <a href="?pagina=relatorio_aluno" class="btn btn-danger" role="button">Relatorio Alunos</a> 
            </p>
          </div>
        </div>
      </div>

    </div>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

