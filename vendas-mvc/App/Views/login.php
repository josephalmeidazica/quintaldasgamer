<?php
require_once "../config.php";
  //se houver usuário logado, redireciona para home
  if(isset($_SESSION["lembrar"]) && $_SESSION["lembrar"] == TRUE)
      header("Location:home.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login</title>
  </head>
              
    <body class="text-center">
      <div class="row justify-content-center mt-5">
      <div class="jumbotron col-md-3 bg-light border mt-5">
        <div class="container ">


          <form class="form-signin" method="POST" action="../Controllers/validaLogin.php">
            <img class="mb-4" src="img/login.svg" alt="" width="72" height="72">
            <h1 class="h4 mb-3 font-weight-normal">Faça o Login</h1>
            <input type="email" name="inputEmail" class="form-control" placeholder="Endereço de e-mail" required autofocus>
            <input type="password" name="inputSenha" class="form-control mt-2" placeholder="Senha" required>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" name="lembrar" > Permanecer conectado
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
            <label>
                <a href="App/Views/cadastro.php"> Não tenho uma conta
            </label>
          </form>

          <?php
            //verifica se existe mensagem de erro para ser exibida 
            if(isset($_SESSION["msg"])){

          ?>
            <div class="text-center text-danger mt-3">
              
              <?php echo $_SESSION["msg"]; ?>

            </div>

          <?php
            //exclui a mensagem da sessão
            unset($_SESSION["msg"]);
            }
          ?>

        </div>
      </div>
    </div>

  
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>