<?php

class CaracteristicaController
{

    public function salvar()
    {
        $produto = Sessao::retornaIdObjeto('Produto');

        $caracteristica = new Caracteristica;
        $caracteristica->setNome($_POST['nomeCaracteristica']);
        $caracteristica->setValor($_POST['valorCaracteristica']);
        $caracteristica->setIdProduto($produto->getId());
        
        Caracteristica::startConexao();
        $caracteristica->salvar();
    
        $this->redirect('/App/Views/caracteristica_view.php');
    }

    public function buscarTodos()
    {
        Caracteristica::startConexao();
        return Caracteristica::buscarTodos();
    }

    public function buscarIdProduto($id_produto)
    {
        $filtro = "produto_id = '$id_produto'";    
        Caracteristica::startConexao();
        return Caracteristica::buscarTodos($filtro);
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