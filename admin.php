     <?php include_once('menu_admin.php'); 
        include_once("aluno.class.php");
        include_once("pessoa.class.php");
        $pessoa = new pessoa;
        $pessoa->__set('id', @$_GET['id_pessoa']);
        $pessoa -> carregar();
     ?>

    <div class="container-fluid" style="height: 100%;">
      
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
      

   
        <div class="col-md-2">
          <div class="box-perfil">
            <img src="img/avatar.png" class="center-block img-responsive img-rounded img-avatar">
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <form class="center" method="POST" action="?pagina=acao_admin">
              <label>ID:</label><br>
              <input class="form-control" name="id" value="<?php echo $pessoa->__get('id')?>"><br>
              <label>Email:</label><br>
              <input class="form-control" name="email" value="<?php echo $pessoa->__get('email')?>"><br>
              <label>Senha:</label><br>
              <input type="text"class="form-control" name="senha" value="<?php echo $pessoa->__get('senha')?>"><br>
              <button class="btn btn-danger" name="acao" value="excluir" formnovalidate>Excluir</button><br>
              <button class="btn btn-danger" name="acao" value="alterar" formnovalidate>Alterar</button>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 center table-responsive">
            <table class="table table-striped">
            <h2 class="sub-header text-center">Usuários</h2>
              <thead><tr><th>ID</th><th>CGM</th><th>Nome</th><th>Email</th></tr></thead>
              <?php
                $aluno = new Aluno;
                $dados = $aluno->listar();
                  foreach ($dados as $linha) {
                     echo "<tr onclick=\"location.href='?pagina=admin.php&id_pessoa=".$linha['id']."'\"><td>";
                     echo $linha['id'];
                     echo "</td><td>";
                     echo $linha['cgm'];
                     echo "</td><td>";
                     echo $linha['nome'];
                     echo "</td><td>";
                     echo $linha['email'];
                     echo "</td>";
                  }
              ?>
            </table>
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

