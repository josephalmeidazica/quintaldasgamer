<!doctype html>
<?php require_once "../config.php"; ?>
<html lang="pt">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Cadastro de Fabricante</title>
</head>

<body>

  <div class="row mt-4">
    <div class="col-md-1"></div>
    <div class="col-md-4">
      <h1 class="display-4 text-primary"> Fabricante </h1>
    </div>
  </div>

  <!-- Form -->
  <div class="row  mt-4">
    <div class="col-md-1"></div>
    <div class="jumbotron col-md-4 ">
      <form action="../Controllers/indexController.php" method="POST">

        <!-- Row 1 -->
        <div class="form-row ">
          <div class="form-group col-md-12">
            <label for="nomeFabricante">Nome</label>
            <input type="text" class="form-control" name="nomeFabricante" id="nomeFabricante" placeholder="Nome do Fabricante" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="siteFabricante">Site</label>
            <input type="text" class="form-control" name="siteFabricante" id="siteFabricante" placeholder="Endereço do Site" required>
          </div>
        </div>
        <div class="form-row mt-4">
          <button class="btn btn-outline-primary col-md-12 btn-block" type="submit" name="salvarFabricante">Cadastrar</button>
        </div>
      </form>
    </div>
    <div class="row col-md-1"></div>
    <!-- Quarta coluna - TABELA-->
    <div class="container bg-transparent col-md-5 ">
      <table class="table">
        <thead class="thead-light ">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Site</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $fabCtrl = new FabricanteController;
          foreach ($fabCtrl->buscarTodos() as $f) {
            ?>
            <tr>
              <td><?php echo $f->getId(); ?></td>
              <td><?php echo $f->getNome(); ?></td>
              <td><?php echo $f->getSite(); ?></td>
            <tr>
            <?php
            } //fim foreach
            ?>
        </tbody>
      </table>
    </div>
    <div class="row col-md-1"></div>
  </div>
  <!-- Fim form-->

  <!-- Table -->

  <div class="row mt-2">
    <div class="col-md-1"></div>
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