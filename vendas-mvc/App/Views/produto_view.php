<!DOCTYPE html>
<html lang="pt">
<?php require_once "../config.php"; ?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Cadastro de Produtos</title>
</head>

<body>
  <br>
  <div class="row mt-4">
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <h1 class="display-4 text-primary">Produto </h1>
    </div>
  </div>

  <!-- Form -->
  <div class="row">
    <div class="col-md-2"></div>
    <div class="jumbotron bg-transparent col-md-5 ">
      <form action="../Controllers/indexController.php" method="POST">

        <div class="form-group">
          <label for="nomeProduto">Nome</label>
          <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Nome do produto" required>
        </div>

        <div class="form-group">
          <label for="descricaoProduto">Descrição</label>
          <textarea class="form-control" name="descricaoProduto" id="descricaoProduto" placeholder="Detalhes do produto" rows="3"></textarea>
        </div>

        <div class="form-group">
          <label for="descricaoProduto">Imagem</label>
          <textarea class="form-control" name="imgProduto" id="imgProduto" placeholder="Link da imagem do produto" rows="3"></textarea>
        </div>

        <!-- Row2 -->
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="precoCusto">Preço de Custo</label>
            <input type="number" class="form-control" name="precoCusto" id="precoCusto" placeholder="1,00" step="0.01" min="0" prequired>
          </div>
          <div class="form-group col-md-4">
            <label for="precoVenda">Preço de Venda</label>
            <input type="number" class="form-control" name="precoVenda" id="precoVenda" placeholder="1,00" step="0.01" min="0" prequired>
          </div>
          <div class="form-group col-md-4">
            <label for="estoque">Estoque</label>
            <input type="number" class="form-control" name="estoque" id="estoque" min="1" placeholder="1" required>
          </div>
        </div>

        <!-- Row 3 -->
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="categoria">Categoria</label>
            <select class="form-control" name="categoria" id="categoria">
              <?php
              $catCtrl = new CategoriaController();

              foreach ($catCtrl->buscarTodos() as $c) {
                ?>
                <option><?php echo $c->getNome(); ?></option>

              <?php
              } //fim foreach
              ?>

            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="fabricante">Fabricante</label>
            <select class="form-control" name="fabricante" id="fabricante">
              <?php
              $fabCtrl = new FabricanteController;
              foreach ($fabCtrl->buscarTodos() as $f) {
                ?>
                <option><?php echo $f->getNome(); ?></option>

              <?php
              } //fim foreach
              ?>
            </select>
          </div>

        </div>
        <!-- Row 3 -->

        <div class="form-row justify-content-center mt-4">
          <button class="btn btn-outline-primary col-md-6 btn-block" type="submit" name="addCaracteristicaProduto">Adicionar Características</button>
        </div>

      </form>

    </div>

  </div>
  <!-- Fim form-->

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