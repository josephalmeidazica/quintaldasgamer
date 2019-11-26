<!DOCTYPE html>
<?php require_once "../config.php"; ?>

<html lang="pt-br">

<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Cadastro de Categoria</title>
</head>

<body>
	<br>

	<div class="row mt-4">
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<h1 class="display-4 text-primary"> Categoria </h1>
		</div>
	</div>

	<!-- Form -->
	<div class="row mt-4"">
		<div class=" col-md-1"></div>
	<div class="jumbotron col-md-4 ">
		<form method="POST" action="../Controllers/indexController.php">
			<!-- Row 1 -->
			<div class="form-row mt-2">
				<div class="col-md-9">
					<input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" placeholder="Nome da Categoria" required>
				</div>
				<div class="col-md-3">
					<button class="btn btn-outline-primary btn-block" type="submit" name="salvarCategoria">Adicionar</button>
				</div>
			</div>
		</form>
	</div>
	<div class=" col-md-1"></div>
	<!-- Tabela-->
	<div class="container bg-transparent col-md-5">
		<table class="table">
			<thead class="thead-light ">
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Nome da Categoria</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$catCtrl = new CategoriaController;
				foreach ($catCtrl->buscarTodos() as $c) {
					?>
					<tr>
						<td><?php echo $c->getId(); ?></td>
						<td><?php echo $c->getNome(); ?></td>
					<tr>
					<?php
					} //fim foreach
					?>

			</tbody>
		</table>
	</div>
	<div class=" col-md-1"></div>
	</div>


	<div class="row mt-4">
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<a href="../../index.php" class="card-link">Tela Inicial</a>
		</div>
	</div>

	<!-- JavaScript (Opcional) -->
	<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>