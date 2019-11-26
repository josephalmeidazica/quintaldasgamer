<!doctype html>
<?php require_once "../config.php"; ?>
<html lang="pt">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Cadastro de Características</title>
</head>

<body>
  <!-- Form -->
  <div class="row">
    <div class="row col-md-2"></div>
    <div class="jumbotron bg-transparent col-md-8 ">
      <h1 class="display-4 text-primary">Características do Produto </h1>

      <?php
      $produto = Sessao::retornaIdObjeto('Produto');
      $texto = '';

      if (!empty($produto)) {
        $texto = "ref.: " . $produto->getId() . " - " . $produto->getNome();
      }
      ?>
      <h1 class="lead text-secondary"><?php echo $texto; ?></h1>

      <form action="../Controllers/indexController.php" method="POST">

        <!-- Row 1 -->
        <div class="form-row mt-4">
          <div class="form-group col-md-6">
            <label for="nomeCaracteristica">Nome</label>
            <input type="text" class="form-control" name="nomeCaracteristica" id="nomeCaracteristica" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="valorCaracteristica">Valor</label>
            <input type="text" class="form-control" name="valorCaracteristica" id="valorCaracteristica" required>
          </div>
        </div>

        <div class="form-row mt-4">
          <button class="btn btn-outline-primary col-md-6 btn-block" type="submit" name="salvarCaracteristica">Adicionar</button>
        </div>

      </form>

    </div>



  </div>
  <!-- Fim form-->

  <!-- Table -->

  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <table class="table">
        <thead class="thead-light ">
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $caractCtrl = new CaracteristicaController;
          $retorno = $caractCtrl->buscarIdProduto($produto->getId());
          foreach ($retorno as $c) {
            ?>
            <tr>
              <td><?php echo $c->getNome(); ?></td>
              <td><?php echo $c->getValor(); ?></td>
            <tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <a href="confirmacao_view.php" class="btn btn-outline-primary btn-block"  name="finalizarCadastro">Finalizar Cadastro</a>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <a href="../../index.php" class="card-link">Tela Inicial</a>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>