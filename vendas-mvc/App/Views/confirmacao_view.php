<!DOCTYPE html>
<?php
require_once "../config.php";

?>

<html lang="pt-br">

<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Finalizando Cadastro</title>
</head>

<body>
	<br>
	<div class="row mt-4">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h1 class="display-4 text-primary"> Confirmação do Cadastro </h1>

		</div>
	</div>

	<?php $produto = Sessao::retornaIdObjeto('Produto');
	$caractCtrl = new CaracteristicaController;
	$retorno = $caractCtrl->buscarIdProduto($produto->getId());
/*
echo "
<pre>";
print_r($produto);
echo "</pre>";
echo "
<pre>";
print_r($retorno);
echo "</pre>";
*/?>
<div class="row mt-4">
	<div class="col-md-1"></div>
	<div class="col-md-1">
		<h4 class="display-5 text-primary"> Nome </h4>
		<h5 class="display-6 text-secondary"> <?php echo $produto->getNome(); ?> </h5>
		<h4 class="display-5 text-primary"> Descrição </h4>
		<h5 class="display-6 text-secondary"> <?php echo $produto->getDescricao(); ?> </h5>
		<h4 class="display-5 text-primary"> Estoque </h4>
		<h5 class="display-6 text-secondary"> <?php echo $produto->getEstoque(); ?> </h5>
		<h4 class="display-5 text-primary"> Preço de custo </h4>
		<h5 class="display-6 text-secondary"> <?php echo $produto->getPrecoCusto(); ?> </h5>
		<h4 class="display-5 text-primary"> Preço de venda </h4>
		<h5 class="display-6 text-secondary"> <?php echo $produto->getPrecoVenda(); ?> </h5>
		<h4 class="display-5 text-primary"> Fabricante </h4>
		<h5 class="display-6 text-secondary"> <?php echo $produto->getFabricante()->getNome(); ?> </h4>
		<h4 class="display-5 text-primary"> Categoria </h4>
		<h5 class="display-6 text-secondary"> <?php echo $produto->getCategoria()->getNome(); ?> </h5>

		</div>
	</div>


	<!-- Tabela-->
	<div class="container bg-transparent row mt-4">
		<table class="table">
			<thead class="thead-light ">
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Características</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$catCtrl = new CategoriaController;
				foreach ($retorno as $c) {
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
<!-- Form -->
<div class="row">
	<div class="col-md-2"></div>
	<div class="jumbotron bg-transparent col-md-9 ">


	</div>
</div>

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-2">
		<a href="../../index.php" class="btn btn-outline-primary btn-block" name="confirmarCadastro">Confirmar</a>
	</div>
	<div class="col-md-2">
		<a href="confirmacao_view.php" class="btn btn-outline-primary btn-block" name="cancelarCadastro">Cancelar</a>
	</div>
</div>


<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>