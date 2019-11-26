<?php
require_once "../config.php";
	//inicia a sessão


	//valores para testar o login
	//na aplicação real, o valor deverá ser recuperado do BD
$usuariosControler =  new UsuarioController;
$users = $usuariosControler->buscarTodos();
foreach ($users as $u) {
	//verifica se o login e senha digitados estão corretos
	if( $_POST["inputEmail"] == $u->getLogin() && $_POST["inputSenha"] == $u->getSenha()){
		//se login correto, armazena o nome do usuário na sessão
		//na aplicação real, o valor deverá ser recuperado do BD
		echo $u->getNome();
		$_SESSION["nome"] = $u->getNome();
		$_SESSION["logado"] = TRUE;
		$_SESSION["tipo"] = $u->getTipo();
		if(isset($_POST["lembrar"])){
			$_SESSION["lembrar"] = TRUE;
		}
		header("Location:../Views/home.php"); 	//redireciona para a página Home

	}}
	if(isset($_SESSION["logado"]) && $_SESSION["logado"] != TRUE){
	$_SESSION["msg"] = "E-mail ou senha incorretos";
	    header("Location:../Views/login.php");	//redireciona para página Login
	}

?>
