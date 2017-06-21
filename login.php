<?php
  session_start();
?>
<!DOCTYPE html>
  <head>
    <?php include_once('carregar_links.php'); ?>
    <title> Teste Login </title>
  </head>

  <body class="bglogin">

    <div class="container">
      <div class="row">
        <form class="col-lg-3 center my_form" style="margin-top: 9rem !important;" method="POST" action="?pagina=validar_login">
        <h2 class="form-signin-heading text-center no-margin">Login - CEEP</h2>
        <img src="img/avatar.png" class="center-block img-responsive img-rounded img-avatar" style="max-width: 115px;">
        
          <div class="input-group margin-bottom-sm ">
            <span class="input-group-addon"><i class="fa fa-envelope-o "></i></span>
            <input class="form-control" type="text" id="inputEmail" name="login" placeholder="Email address" required autofocus>
          </div>

          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key "></i></span>
            <input class="form-control" type="password" id="inputPassword" name="senha" placeholder="Password" required>
          </div>
          

          <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me"> Lembrar-me
            </label>
          </div>
          
          <div class="btn-group">
            <input type="submit" class="btn btn-primary" value="Logar"></input>
            <a href="?pagina=cadastro_aluno" class="btn btn-danger" role="button">Cadastrar-se</a>
            <a href="?pagina=recuperar_senha" class="btn btn-danger" role="button">Rec. Senha</a>
        
          </div>

        </form> <!-- /form -->
      </div> <!-- /row -->
    </div> <!-- /container -->

  </body>
</html>


<?php
if(isset($_SESSION['error'])){
  echo $_SESSION['error'];
}
  session_destroy();
?>