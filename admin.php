<!DOCTYPE html>

  <head>
    <?php include_once('carregar_links.php'); ?>
    <title> Admin </title>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fi">
      <div class="container-fluid">
        
        <div class="row">
        <div class="col-md-1 navbar-header">
          <a class="navbar-brand" href="#">
            <img src="img/brand.png" alt="Brand" width="40" class="img-responsive img-rounded">
          </a>
        </div>

         <div class="col-md-9 drop-margin">
          <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Relatórios
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="?pagina=relatorio_curso">Cursos</a></li>
          <li><a href="?pagina=relatorio_disciplina">Disciplinas</a></li>
          <li><a href="?pagina=relatorio_funcionario">Funcionários</a></li>
          <li><a href="?pagina=relatorio_aluno">Alunos</a></li>
        </ul>
      </div>

      <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Cadastros
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <li><a href="?pagina=cadastro_curso">Cursos</a></li>
          <li><a href="?pagina=cadastro_disciplina">Disciplinas</a></li>
          <li><a href="?pagina=cadastro_funcionario">Funcionários</a></li>
        </ul>
      </div>

      </div>

        <ul class="col-sm-2 nav navbar-nav pull-right ">
          <li><a href="#"><span class="fa fa-user"></span> Sign Up</a></li>
       
          <li><a href="#"><span>
            <img src="img/avatar.png" alt="Logo" width="15" class="no-margin img-responsive img-rounded img-avatar">
            </span></a></li>
          <li><a href="#"><span class="fa fa-log-in"></span> Login</a></li>
          </div>
        </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid" style="height: 100%;">
        
      <div class="row">
        <div class="col-md-2">
          <div class="box-perfil">
            <img src="img/avatar.png" class="center-block img-responsive img-rounded img-avatar">
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

