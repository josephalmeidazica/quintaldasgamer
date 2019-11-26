<?php

include "../config.php";

if(isset($_POST['salvarFabricante'])){

	$fabCtrl = new FabricanteController();
    $fabCtrl->salvar();

}

if(isset($_POST['salvarCategoria'])){

	$catCtrl = new CategoriaController();
    $catCtrl->salvar();

}

if(isset($_POST['addCaracteristicaProduto'])){

	$prodCtrl = new ProdutoController();	
    $prodCtrl->salvar();

}

if (isset($_POST['salvarCaracteristica'])) {

	$caractCtrl = new CaracteristicaController();
	$caractCtrl->salvar();
}

if (isset($_POST['salvarUsuario'])) {

	$userCtrl = new UsuarioController();
	$userCtrl->novo();
}

?>