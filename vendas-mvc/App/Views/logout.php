<?php 
    
    session_start();

    //limpa os valores da sessão	
	unset($_SESSION["user"]);
	unset($_SESSION["logado"]);
	unset($_SESSION["msg"]); 
    
    //redireciona para tela de login
    header("Location:login.php");
?>
