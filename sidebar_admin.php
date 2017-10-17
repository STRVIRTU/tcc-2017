 <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top side-menu">
          <div class="box-perfil center">
            <img src="img/avatar.png" class="block img-responsive img-rounded img-avatar">
          </div>
          <div class="side-menu-usertitle">
            <br>            
            <div class="side-menu-nome">
              <?php echo $_SESSION['nome']; ?>
            </div>
            <div class="side-menu-cargo">
              Administrador
            </div>
           <hr>
          </div>

          <ul>
            <li class="link">
              <a href="?pagina=admin">
                <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Dashboard</span>
              </a>
            </li>
            <br>
            <li><span class="hidden-sm hidden-xs relatorio"><P>Relatórios</P></span></li>
          
            <li class="link">
              <a href="?pagina=relatorio_curso">
                <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Cursos</span>
              </a>
            </li>

             <li class="link">
              <a  href="?pagina=relatorio_aluno">
                <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Alunos</span>
              </a>
            </li>

            <li class="link">
              <a href="?pagina=relatorio_disciplina">
                <span class="fa fa-book" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Disciplinas</span>
              </a>
            </li>

            <li class="link">
              <a href="?pagina=relatorio_funcionario">
                <span class="fa fa-user" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Funcionarios</span>
              </a>
            </li>
          </ul>
      </div>