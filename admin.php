<?php
        include_once("aluno.class.php");
        include_once("pessoa.class.php");
        $pessoa = new pessoa;
        $pessoa->__set('id', @$_GET['id_pessoa']);
        $pessoa -> carregar();
        //include_once("sidebar_admin.php");
?>
<html>
  <body class="admin">

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
                  <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="side-menu">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                  </button>
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
                  <a href="#" class="logout">
                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                    log out
                  </a>
                </li>
              </ul>
              </div>    
            </header>
          </div>
          <div class="dashboard-con">
            <div class="row">
              <div class="col-md-6 dashboard-left-cell">
                <div class="admin-content-con">
                  <header class="clearfix">
                    <h5 class="pull-left">Articles</h5>
                    <a class="btn btn-xs btn-primary pull-right" href="#" role="button">Criar novo</a>
                  </header>
                  <table class="table table-striped">     
                    <thead>
                      <tr>
                        <th>title</th>
                        <th>replies</th>
                        <th>date</th>
                        <th>actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>This is the first post</td>
                        <td>20</td>
                        <td>2 days ago</td>
                        <td>
                          <a class="btn btn-xs btn-warning" href="#" role="button">edit</a>
                          <a class="btn btn-xs btn-primary" href="#" role="button">view</a>
                          <a class="btn btn-xs btn-danger" href="#" role="button">delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>This is the first post</td>
                        <td>20</td>
                        <td>2 days ago</td>
                        <td>
                          <a class="btn btn-xs btn-warning" href="#" role="button">edit</a>
                          <a class="btn btn-xs btn-primary" href="#" role="button">view</a>
                          <a class="btn btn-xs btn-danger" href="#" role="button">delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>This is the first post</td>
                        <td>20</td>
                        <td>2 days ago</td>
                        <td>
                          <a class="btn btn-xs btn-warning" href="#" role="button">edit</a>
                          <a class="btn btn-xs btn-primary" href="#" role="button">view</a>
                          <a class="btn btn-xs btn-danger" href="#" role="button">delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>This is the first post</td>
                        <td>20</td>
                        <td>2 days ago</td>
                        <td>
                          <a class="btn btn-xs btn-warning" href="#" role="button">edit</a>
                          <a class="btn btn-xs btn-primary" href="#" role="button">view</a>
                          <a class="btn btn-xs btn-danger" href="#" role="button">delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>This is the first post</td>
                        <td>20</td>
                        <td>2 days ago</td>
                        <td>
                          <a class="btn btn-xs btn-warning" href="#" role="button">edit</a>
                          <a class="btn btn-xs btn-primary" href="#" role="button">view</a>
                          <a class="btn btn-xs btn-danger" href="#" role="button">delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <hr>
                  <a href="#" class="pull-right text-link"> view all</a>
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
                        <th>#</th>
                        <th>Full name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Kingsley Ijomah</td>
                        <td>kings.ijomah@example.com</td>
                        <td><a href="#" class="label label-default">pending</a></td>
                        <td>Today 5:60pm - 14/09/2015</td>
                        <td><a href="#" class="label label-danger">Delete</a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Kingsley Ijomah</td>
                        <td>kings.ijomah@example.com</td>
                        <td><a href="#" class="label label-success">active</a></td>
                        <td>Today 5:60pm - 14/09/2015</td>
                        <td><a href="#" class="label label-danger">Delete</a></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Kingsley Ijomah</td>
                        <td>kings.ijomah@example.com</td>
                        <td><a href="#" class="label label-default">pending</a></td>
                        <td>Today 5:60pm - 14/09/2015</td>
                        <td><a href="#" class="label label-danger">Delete</a></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Kingsley Ijomah</td>
                        <td>kings.ijomah@example.com</td>
                        <td><a href="#" class="label label-success">active</a></td>
                        <td>Today 5:60pm - 14/09/2015</td>
                        <td><a href="#" class="label label-danger">Delete</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </div>

    </script>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/default.js"></script>
  </body>
</html>