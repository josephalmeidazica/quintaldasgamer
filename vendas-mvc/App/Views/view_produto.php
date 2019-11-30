<?php
	require_once "../config.php";
  $id = $_GET['idProduto'];
  Produto::startConexao();
  $produto = Produto::find($id);
  session_start();

   if (empty($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
   }

   //array_push($_SESSION['cart'],$produto->getId());

  if(isset($_POST['comprar'])){
    array_push($_SESSION['cart'], $produto->getId());
  }

?>


<!DOCTYPE html>
<html lang="pt">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title><?php echo $produto->getNome()?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand text-info" href="home_user.php">QDG</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carrinho.php">Carrinho</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="row mt-4">
    <div class="col-md-1"></div>
    <div class="col-md-4">
      <h1 class="display-4 text-primary"> Confirmar compra </h1>
    </div>
  </div>

  <!-- Form -->
  <div class="row  mt-4">
    <div class="col-md-1"></div>
    <div class="jumbotron col-md-4 ">
     <img class="card-img-top" src=<?php echo $produto->getImg()?> width="600" height="500">
    </div>
    <div class="row col-md-1"></div>
    <!-- Quarta coluna - TABELA-->
  <!-- Fim form-->

      <div class="row col-md-1"></div>
    <!-- Quarta coluna - TABELA-->
    <div class="container bg-transparent col-md-5 ">
     <h2 class="display-4 text-primary"><?php echo $produto->getNome()?></h2>
     <br>
     <h3 class="display-6 text-secondary"><?php echo $produto->getDescricao()?></h3>
     <br>
    <h3 class="card-text text-info"><?php echo "R$".$produto->getPrecoVenda()?></h3>
    <p><?php echo "Disponível: ".$produto->getEstoque()?></p>
    <form method="post">
    <button type="submit" name="comprar" class="btn btn-block btn-outline-success" >Comprar</button>
  </form>
    </div>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
