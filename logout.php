<?php  

if (isset($_SESSION['logado'])) {
         session_destroy();
         header("Location:?pagina=login");

      }


?>