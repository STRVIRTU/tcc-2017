   <?php
        include_once('pessoa.class.php'); 
      if (isset($_SESSION['error'])) {
          echo '<div class="alert alert-danger col-md-6 center fade in">';
          echo    '<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
          echo    '<p class="text-center">Caminho não permitido! Realize o login!</p>';
          echo '</div>';
          session_destroy();
      }

            if (isset($_POST['email_rec'])) {
              $pessoa = new Pessoa();
              $email= $_POST['email_rec'];
              $pessoa-> __set('email', $email);
              $pessoa->recuperar_senha(); 
            }
     


  

   ?>

 <div class="container">
        <div class="row">
              <form class="col-md-3 center my_form" style="margin-top: 9rem !important;" method="POST" action="?pagina=validar_login">
                <!-- <h2 class="form-signin-heading text-center no-margin">Login - CEEP</h2> -->
                  <img src="img/logo_ceep.jpg" class="center-block img-responsive img-rounded img-avatar" style="max-width: 115px;">
          
                    <div class="input-group ">
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
            
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-success login_btn text-center"><strong>Logar</strong></button>
                    </div>
                    <div class="col-md-12">
                      <a href="?pagina=cadastro_aluno" class="col-md-4 btn btn-success login_btn text-center" role="button"><strong>Cadastrar-se</strong></a>
                    </div>
                    <div class="col-md-12">
                      <a  class="col-md-4 btn btn-success login_btn " role="button" data-toggle="modal" data-target="#myModal"><strong>Rec. Senha</strong></a>
                    </div>
                  </div>
                </form> <!-- /form -->
           </div> <!-- /row -->

           <!--FORM RECUPERAR SENHA-->

           <!-- Small modal -->
        

            <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Recuperação de Senha</h4>
                </div>
                <div class="modal-body">
                  <form class="form-rec" method="POST">
                    <label>Informe seu email</label>
                    <input type="text" class="form-control" name="email_rec"><br>
                   <!--  <button type="submit" class="btn btn-success" role="button">Rec. Senha</button> -->
                  </div>
                 
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" role="button" onclick="location.href='?pagina=login'" >Rec. Senha</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div> <!-- /container -->
 
        </script>
        <br>
        <br>
        <br>
    
