 <?php 

      if (!isset($_SESSION['logado'])) {
          $_SESSION['error'] = "Realize o Login";
          header("Location:?pagina=login");

      }

        include_once("aluno.class.php");
        include_once("pessoa.class.php");
        include_once("funcionario.class.php");
        $pessoa = new Pessoa;
        /*
        $pessoa->__set('id', @$_GET['id']);
        $pessoa -> carregar();


        $aluno = new Aluno;
        $pessoa->__set('id', @$_GET['id']);
        $aluno->__set("idpessoa", @$_GET['id']);
        $aluno->excluir();

        */

        if((@$_GET['funcao']=='alterar') or (@$_GET['funcao']=='ver') or (@$_GET['funcao']=='excluir')) {
          $pessoa->__set('id', @$_GET['id']);
          $pessoa -> carregar();
     
      }
      


?>

<script type="text/javascript">
  function _GET(name)
  {
    var url   = window.location.search.replace("?", "");
    var itens = url.split("&");
   
    for(n in itens)
    {
      if( itens[n].match(name) )
      {
        return decodeURIComponent(itens[n].replace(name+"=", ""));
      }
    }
    return null;
  }

  if(_GET("funcao")=='alterar'){
      $(window).on('load',function(){
          $('#ModalAlterar').modal('show');
      });
    }

    if (_GET("funcao")=='ver') {
      $(window).on('load',function(){
          $('#ModalVer').modal('show');
      });
    }

    if (_GET("funcao")=='excluir') {
      $(window).on('load',function(){
        $('#ModalExcluir').modal('show');
      });
    }
    if (_GET("funcao")=='novo') {
      $(window).on('load',function(){
        $('#ModalNovo').modal('show');
      });
    }
</script>

<script type="text/javascript">

  $(document).on('hidden.bs.modal','#ModalVer', function () {

      window.history.pushState('teste','Titulo de teste','?pagina=admin'); 

  });
  $(document).on('hidden.bs.modal','#ModalAlterar', function () {

     window.history.pushState('teste','Titulo de teste','?pagina=admin'); 

  });
  $(document).on('hidden.bs.modal','#ModalExcluir', function () {

      window.history.pushState('teste','Titulo de teste','?pagina=admin'); 

  });

  $(document).on('hidden.bs.modal','#ModalNovo', function () {

      window.history.pushState('teste','Titulo de teste','?pagina=admin'); 

  });

</script>



    <div class="container-fluid display-table">
      <div class="row display-table-row">
        <!-- Side menu -->

        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top side-menu">
          <?php include_once('sidebar_admin.php'); ?>
        </div>
        <!-- Main content -->
        <div class="col-md-10 col-sm-11 display-table-cell valign-top">
          <div class="row">
            <header class="nav-header clearfix">
              <div class="col-md-5">
                <nav class="navbar-default pull-left">

                  <!--Collapse-->
                  <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#side-collapse">
                    
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>

                  </button>

                  <div class="collapse navbar-collapse" id="side-collapse">
                      <ul class="nav navbar-nav visible-xs">
                            <li class="link active">
                              <a href="?pagina=admin">
                                <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                                <span class="hidden-sm hidden-xs">Dashboard</span>
                              </a>
                            </li>

                           <!--  <ul class="link" id="relatorio">
                                <span class="hidden-sm hidden-xs">Relatórios</span>
                              <li><a class="itemrelatorio" href="?pagina=relatorio_curso">Cursos</a></li>
                              <li><a class="itemrelatorio"href="?pagina=relatorio_aluno">Alunos</a></li>
                              <li><a class="itemrelatorio" href="?pagina=relatorio_funcionario">Funcionários</a></li>
                              <li><a class="itemrelatorio" href="?pagina=relatorio_disciplina">Disciplinas</a></li>
                            </ul> -->
                            
                            <li class="link">
                              <a href="?pagina=cadastro_curso">
                                <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                                <span class="hidden-sm hidden-xs">Cursos</span>
                              </a>
                            </li>

                            <li class="link">
                              <a href="?pagina=cadastro_disciplina">
                                <span class="fa fa-book" aria-hidden="true"></span>
                                <span class="hidden-sm hidden-xs">Disciplinas</span>
                              </a>
                            </li>

                            <li class="link">
                              <a href="?pagina=cadastro_funcionario">
                                <span class="fa fa-user" aria-hidden="true"></span>
                                <span class="hidden-sm hidden-xs">Funcionarios</span>
                              </a>
                            </li>
                      </ul>
                  </div><!---Fim Collapse-->
               </nav>
                  <input type="text" class="hidden-sm hidden-xs header-search-field" placeholder="Search for something...">
            </div>



            <div class="col-md-7">
                <ul class="pull-right">
                    <li class="welcome hidden-xs">Bem vindo a area administrativa</li>
                    <li class="fixed-width">
                        <a href="#">
                          <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                          <span class="label label-warning">3</span>
                        </a>
                    </li>
                    <li class="fixed-width">
                        <a href="#">
                          <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                          <span class="label label-message">3</span>
                        </a>
                    </li>
                    <li>
                        <a href="?pagina=logout" class="logout">
                          <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                            Sair
                        </a>
                    </li>
                </ul>
            </div><!---Fim Col-md-7--> 
            </header>
          </div><!---Fim row-->
          <div class="dashboard-con">
            <div class="row">
              <div class="col-md-6 dashboard-left-cell">
                <div class="admin-content-con">
                  <header class="clearfix">
                    <h5 class="pull-left">Usuários</h5>
                    <a class="btn btn-xs btn-primary pull-right" onclick="location.href='?pagina=admin&id=&funcao=novo'" role="button">Criar novo</a>
                  </header>
                  <table class="table table-striped">     
                    <thead>
                      <tr>
                        <th>Nome</th>
                        <th>ID</th>
                        <th>Data Alteração</th>
                        <th>Acão</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          
                          $dados = $pessoa->listar();
                            foreach ($dados as $linha) {
                               // echo "<tr onclick=\"location.href='?pagina=admin.php&id=".$linha['id']."'\"><td>";
                              echo "<tr>";
                               echo "<td>".$linha['nome']."</td>";
                               echo "<td>".$linha['id']."</td>";
                                echo "<td>20/08/2016</td>";
                                echo "<td>";
                                  echo "<a class=\"btn btn-xs btn-warning\" href=\"#\" role=\"button\" onclick=\"location.href='?pagina=admin&id=".$linha['id']."&funcao=alterar'\" >Alterar</a>";
                                  echo "<a class=\"btn btn-xs btn-primary\" href=\"#\" role=\"button\" onclick=\"location.href='?pagina=admin&id=".$linha['id']."&funcao=ver'\">Ver</a>";
                                  echo "<a class=\"btn btn-xs btn-danger\" onclick=\"location.href='?pagina=admin&id=".$linha['id']."&funcao=excluir'\" role=\"button\">Excluir</a>";
                                echo "</td>";
                              echo "</tr>";

                               // echo "</td><td>";
                               // echo $linha['nome'];
                               // echo "</td><td>";
                               // echo $linha['email'];
                               // echo "</td>";
                            }
                        ?>
                    </tbody>
                  </table>
                  <hr>
                  <a href="#" class="pull-right text-link">Ver todos</a>
                  <br>
                </div>
              </div>
              <div class="col-md-6 dashboard-right-cell">
                <div class="admin-content-con">
                  <header>
                    <h5>Comments</h5>
                  </header>



                  <div class="comment-head-dash clearfix">
                    <div class="commenter-name-dash pull-left">Kingsley Ijomah</div>
                    <div class="days-dash pull-right">2 days ago</div>
                  </div>
                  <p class="comment-dash">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ligula erat, placerat id felis egestas, semper feugiat velit. Sed at arcu ac enim vulputate tincidunt.
                  </p>
                  <small class="comment-date-dash">Today 5:10pm 24/03/2015</small>
                  <hr>
                  
                  <div class="comment-head-dash clearfix">
                    <div class="commenter-name-dash pull-left">Kingsley Ijomah</div>
                    <div class="days-dash pull-right">2 days ago</div>
                  </div>
                  <p class="comment-dash">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ligula erat, placerat id felis egestas, semper feugiat velit. Sed at arcu ac enim vulputate tincidunt.
                  </p>
                  <small class="comment-date-dash">Today 5:10pm 24/03/2015</small>
                  <hr>

                  <div class="comment-head-dash clearfix">
                   <div class="commenter-name-dash pull-left">Kingsley Ijomah</div>
                   <div class="days-dash pull-right">2 days ago</div>
                  </div>
                  <p class="comment-dash">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ligula erat, placerat id felis egestas, semper feugiat velit. Sed at arcu ac enim vulputate tincidunt.
                  </p>
                  <small class="comment-date-dash">Today 5:10pm 24/03/2015</small>
                  <hr>
                  <div class="clearfix">
                    <a href="#" class="pull-right text-link">view all</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="admin-content-con clearfix">
                  <header>
                    <h5>Commenters</h5>
                  </header>

                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Criado</th>
                        <th>Ações</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php

                          $dados = $pessoa->listar();
                            foreach ($dados as $linha) {
                               // echo "<tr onclick=\"location.href='?pagina=admin.php&id=".$linha['id']."'\"><td>";
                              echo "<tr>";
                                echo "<td>".$linha['id']."</td>";
                                echo "<td>".$linha['usuario']."</td>";
                                echo "<td>".$linha['email']."</td>";
                                echo "<td><a href=\"#\" class=\"label label-default\">pendente</a></td>";
                                echo "<td>Today 5:60pm - 14/09/2015</td>";
                                echo "<td><a href=\"#\" class=\"label label-danger\">Delete</a></td>";
                              echo "</tr>";

                               // echo "</td><td>";
                               // echo $linha['nome'];
                               // echo "</td><td>";
                               // echo $linha['email'];
                               // echo "</td>";
                            }
                        ?>
                     
              
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </div>

    <!-- Modal Alterar   -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="ModalAlterar">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Alterar</h4>
          </div>
          <div class="modal-body">
              <form method="post" action="?pagina=acao_admin">
                  <div class="form-group">
                    <label for="exampleInputId">ID</label>
                    <input type="email" class="form-control" name="id" id="exampleInputId" aria-describedby="emailHelp" value="<?php echo $pessoa->__get('id')?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $pessoa->__get('email')?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="senha" id="exampleInputPassword1" value="<?php echo $pessoa->__get('senha')?>">
                  </div>
        
                </div>
                <div class="modal-footer">
                  <p clas="text" style="text-align: left;">Confirmar alteração?</p>
                  <button type="submit" class="btn btn-default" data-dismiss="modal"onclick="" formnovalidate>Não</button>
                  <button type="submit" class="btn btn-warning" name="acao" value="alterar" formnovalidate>Sim</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    



        <!-- Modal Ver   -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="ModalVer">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Ver</h4>
          </div>
          <div class="modal-body">
              <form>
                  <div class="form-group">
                    <label for="exampleInputId">ID</label>
                    <input type="email" class="form-control" id="exampleInputId" aria-describedby="emailHelp" value="<?php echo $pessoa->__get('id')?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $pessoa->__get('email')?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $pessoa->__get('senha')?>">
                  </div>
                </form>
          </div>
          <div class="modal-footer">
           
          </div>
        </div>
      </div>
    </div>
    

        <!-- Modal Excluir   -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="ModalExcluir">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Excluir</h4>
          </div>
          <div class="modal-body">
              <form method ="post" action="?pagina=acao_admin">
                  <div class="form-group">
                    <label for="exampleInputId">ID</label>
                    <input type="email" class="form-control" name="id" id="exampleInputId" aria-describedby="emailHelp" value="<?php echo $pessoa->__get('id')?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $pessoa->__get('email')?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="senha" id="exampleInputPassword1" value="<?php echo $pessoa->__get('senha')?>">
                  </div>
                

                  </div>
                  <div class="modal-footer ">
                    <p clas="text" style="text-align: left;">Confirmar exclusão?</p>
                  <button type="submit" class="btn btn-default" data-dismiss="modal">Não</button>
                  <button type="submit" class="btn btn-danger" name="acao" value="excluir" formnovalidate>Sim</button>
            </form>
          </div>
        </div>
      </div>
    </div>

        <!-- Modal Criar novo   -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="ModalNovo">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Cadastrar novo</h4>
          </div>
          <div class="modal-body">
           <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#aluno" aria-controls="home" role="tab" data-toggle="tab">Aluno</a></li>
            <li role="presentation"><a href="#funcionario" aria-controls="profile" role="tab" data-toggle="tab">Fucionário</a></li>
          </ul>


          </div>
          <div class="modal-footer">
           
          </div>
        </div>
      </div>
    </div>
    





