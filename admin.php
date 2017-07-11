     <?php include_once('menu_admin.php'); 
        include_once("aluno.class.php");
        $aluno = new Aluno;
        $aluno->__set('cgm', @$_GET['cgm']);
        $aluno -> carregar();
     ?>

    <div class="container-fluid" style="height: 100%;">
        
      <div class="row">
        <div class="col-md-2">
          <div class="box-perfil">
            <img src="img/avatar.png" class="center-block img-responsive img-rounded img-avatar">
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <form class="center" method="POST" action="?pagina=validar_login">
              <label>Email:</label><br>
              <input class="form-control" value="<?php echo $aluno->__get('email')?>"><br>
              <label>Senha:</label><br>
              <input type="text"class="form-control" value="<?php echo $aluno->__get('senha')?>"><br>
              <button class="btn btn-danger">Login<br>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 center">
            <table class="table table-inverse">
              <thead class="thead-inverse"><tr><td>CGM</td><td>Nome</td><td>Email</td></tr></thead>
              <?php
                $dados = $aluno->listar();

                  foreach ($dados as $linha) {
                     echo "<tr onclick=\"location.href='?pagina=admin.php&cgm=".$linha['cgm']."'\"><td>";
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

