<?php

class CategoriaController
{

    public function salvar()
    {
      
        $categoria = new Categoria;
        $categoria ->setNome($_POST['nomeCategoria']);
    
        Categoria::startConexao();
        $categoria->salvar();
        
        $this->redirect('/App/Views/categoria_view.php');
    }

    public function buscarTodos()
    {
        Categoria::startConexao();

        return Categoria::buscarTodos();
    }
    
    public function buscarNome($nome)
    {
        $filtro = "nome = '$nome'";

        Categoria::startConexao();
        $result = Categoria::buscarTodos($filtro);

        return $result[0];
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