<?php

class UsuarioController
{

    public function salvar()
    {
        $usuario = Sessao::retornaIdObjeto('Usuario');

        $user = new Usuario;
        $user->setNome($_POST['nomeUsuario']);
        $user->setLogin($_POST['novoLogin']);
        $user->setSenha($_POST['novaSenha']);
        if($usuario->getId()){
        $user->setId($usuario->getId());
        }
        
        Caracteristica::startConexao();
        $user->salvar();
    
        $this->redirect('/App/Views/caracteristica_view.php');
    }

    public function novo()
    {

        $user = new Usuario;
        $user->setNome($_POST['nomeUsuario']);
        $user->setLogin($_POST['novoLogin']);
        $user->setSenha($_POST['novaSenha']);
        Usuario::startConexao();
        $user->novo();
        $_SESSION["nome"] = $user->getNome();
        $_SESSION["logado"] = TRUE;
        $_SESSION["tipo"] = $user->getTipo();
        $this->redirect('/App/Views/home.php');
    }

    public function buscarTodos()
    {
        Usuario::startConexao();
        return Usuario::buscarTodos();
    }

    public function buscarIdUsuario($id_produto)
    {
        $filtro = "produto_id = '$id_produto'";    
        Usuario::startConexao();
        return Usuario::buscarTodos($filtro);
    }

    public function render($view)
    {
        require_once PATH . '/Views/' . $view . '.php';
    }

    public function redirect($view)
    {
        header('Location: http://' . APP_HOST . $view);
        exit;
    }
     
   
   
}