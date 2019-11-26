<?php
	require_once "../config.php";
?>
<!DOCTYPE html>
<html lang="pt">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <title>Qualquer coisa Loja On-Line</title>

  <!-- Bootstrap CSS -->
  <!--link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>
  <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand text-info" href="index.php">Qualquer Coisa</a>
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
  
  <!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Compra realizada</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Os produtos foram adicionados no carrinho.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

  <!--Espaçamento-->
  <br>
  <div class="container my-5"></div>

  <div class="container text-center my-4">
      <h1 class="font-weight-bold display-4 text-info">Quintal das Gamers</h1>
      <h3 class="text-secondary">Sua loja online 100% gamer.</h3>
    </div>

  <!-- Page Content -->
  <div class="container">

    <div class="row justify-content-center">

      <div class="col-lg-11">
       <div class="row">
	   
	   
        <?php
        $prodCtrl = new ProdutoController()
		?>
		<?php foreach ($prodCtrl->buscarTodos() as $p) {   ?>
          <!-- Produto 1-->
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-light h-100">
            <img class="card-img-top" src=<?php echo $p->getImg()?>>
              <div class="card-body">
               <h5 class="card-title text-center text-dark"><?php echo $p->getNome()?></h5>
                <p class="card-text text-center">
                  <small class="text-muted"><?php echo $p->getDescricao()?></small>
                </p>
               
                <h5 class="card-text text-center text-info"><?php echo "R$".$p->getPrecoVenda()?></h5>
                  
              </div>
              <div class="card-footer border-light">
               <form method="POST" >
                  <div class="form-row">
                    <div class="col-5">
                      <input class="form-control" type="number" name="quantidade" min="1" value="1">
                    </div>
                    <div class="col-7">                
                      <?php echo '<a href="view_produto.php?idProduto='.$p->getId().'""><button type="button"  class="btn btn-block btn-outline-success" >Comprar
                      </button></a>'; ?>                  
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
		<?php } ?>
         


        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-3 bg-light">
    <div class="container">
      <p class="m-0 text-center">Copyright &copy; Quintal das Gamers 2019</p>
    </div>
    <!-- /.container -->
  </footer>


  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
