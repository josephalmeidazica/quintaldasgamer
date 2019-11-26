<?php

class HomeController
{
    public function index()
    {
        //chama a página index
        $this->render('login');

    }

    public function Login()
    {
        include "view/Login.php";
    }

    public function Painel()
    {
        $model = new UsuarioModel();
        $usuario = $model->UsuarioLogado();
        include "view/Painel.php";
    }

    public function render($view)
    {
        header("Location:App/Views/login.php");;

    }

}


?>

