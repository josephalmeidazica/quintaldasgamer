<?php

class ProdutoController
{

    public function salvar()
    {
        //buscar a categoria e o fabricante
        $fabCtrl = new FabricanteController();
        $catCtrl = new CategoriaController();
        
        $fabObj = $fabCtrl->buscarNome($_POST['fabricante']);
        $catObj = $catCtrl->buscarNome($_POST['categoria']);
            
        $produto = new Produto;

        $produto->setNome($_POST['nomeProduto']);
        $produto->setDescricao($_POST['descricaoProduto']);
        $produto->setEstoque($_POST['estoque']);
        $produto->setPrecoCusto($_POST['precoCusto']);
        $produto->setPrecoVenda($_POST['precoVenda']);
        $produto->setImg($_POST['imgProduto']);
        $produto->setFabricante($fabObj);
        $produto->setCategoria($catObj);
        
        Produto::startConexao();
        $produto->salvar();
        
        Sessao::gravaIdObjeto($produto,'Produto');

        $this->redirect('/App/Views/caracteristica_view.php');
    }

    public function buscarTodos()
    {
        Produto::startConexao();

        return Produto::buscarTodos();
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