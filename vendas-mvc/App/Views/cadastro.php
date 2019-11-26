<!doctype html>
<?php require_once "../config.php"; ?>
<html lang="pt">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Criar sua conta</title>
</head>

<body>

  <div class="row mt-4">
    <div class="col-md-1"></div>
    <div class="col-md-4">
      <h1 class="display-4 text-primary"> Crie sua conta </h1>
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
            <label for="nomeUsuario">Nome</label>
            <input type="text" class="form-control" name="nomeUsuario" id="nomeUsuario" placeholder="Nome completo" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="novoLogin">E-mail</label>
            <input type="emai" class="form-control" name="novoLogin" id="novoLogin" placeholder="E-mail usado para login" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="novaSenha">Senha</label>
            <input type="password" class="form-control" name="novaSenha" id="novaSenha" placeholder="Senha" required>
          </div>
        </div>
        <div class="form-row mt-4">
          <button class="btn btn-outline-primary col-md-12 btn-block" type="submit" name="salvarUsuario">Cadastrar</button>
        </div>
      </form>
    </div>
    <div class="row col-md-1"></div>
    <!-- Quarta coluna - TABELA-->
  <!-- Fim form-->

      <div class="row col-md-1"></div>
    <!-- Quarta coluna - TABELA-->
    <div class="container bg-transparent col-md-5 ">
     <h2 class="display-4 text-primary"> Criando sua conta você... </h2>
     <br>
     <h3 class="display-6 text-secondary"> Adquire acesso antecipado a produtos! </h3>
     <p>Em nosso e-commerce, você tem acesso aos mais novos produtos destinados as gamers antes de todo mundo, além de ter acesso a preços exclusivos e promoçõs imperdiveis</p>
     <br>
     <h3 class="display-6 text-secondary"> Tem qualidade garantida! </h3>
     <p>Temos produtos importados diretamente dos melhores fornecedores do mercado, garantindo em todos os produtos o selo de qualidade QDG.</p>
     <br>
     <h3 class="display-6 text-secondary"> Segurança na hora de comprar! </h3>
     <p>Temos avaliação perfeita em todos os sites de avaliação pelos nosso clientes, garantimos entregas a prazo sem danos ao produto.</p>
    </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>