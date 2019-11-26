<?php 
  require_once "../config.php";
  //se não estiver logado, redireciona para tela de Login
  if(isset($_SESSION["tipo"]) && $_SESSION["tipo"] == 0 ){
    header("Location:home_user.php");
  }
 
    $boasvindas =  "Olá ". $_SESSION["nome"]."!";
  
?>
<!DOCTYPE html>
<html lang="en">
<?  ?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <title>Loja On-Line</title>

  <!-- Bootstrap CSS -->
  <!--link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <!--Espaçamento-->
  <div class="jumbotron bg-transparent"></div>

  <div class="row justify-content-center">
    <div class="jumbotron bg-light col-lg-5">

      <div class="container text-center col-lg-8">
          <h1 class="display-4 text-primary"><?php echo $boasvindas;?></h1>
        <h1 class="display-4 text-primary">Menu</h1>

          <a href=<?php echo 'http://'.APP_HOST .'/App/Views/list_users.php' ?> class="btn btn-block btn-outline-primary my-3">Listar Usuários</a>

          <a href=<?php echo 'http://'.APP_HOST .'/App/Views/categoria_view.php' ?> class="btn btn-block btn-outline-primary my-3">Categoria</a>

          <a href= <?php echo 'http://'.APP_HOST .'/App/Views/fabricante_view.php' ?> class="btn btn-block btn-outline-primary">Fabricante</a>
          
          <a href=<?php echo 'http://'.APP_HOST .'/App/Views/produto_view.php' ?> class="btn btn-block btn-outline-primary">Produto</a>
      

          <a href=<?php echo 'http://'.APP_HOST .'/App/Views/list_produtos.php' ?> class="btn btn-block btn-outline-primary">Listar Produtos</a>
      
      </div>

  </div>
     
  </div>


  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
