<?php

class FabricanteController
{
    private $fabricante;

    public function __construct(){
        
    }

    public function salvar()
    {
        $fabricante = new Fabricante();
    
        $fabricante ->setNome($_POST['nomeFabricante']);
        $fabricante ->setSite($_POST['siteFabricante']);

        Fabricante::startConexao();
        $fabricante->salvar();
        
        $this->redirect('/App/Views/fabricante_view.php');
    }

    public function buscarTodos()
    {
        Fabricante::startConexao();
        return Fabricante::buscarTodos();
    }

    public function buscarNome($nome)
    {
        $filtro = "nome = '$nome'";

        Fabricante::startConexao();
        $result = Fabricante::buscarTodos($filtro);
        
        return $result[0];
    }
    public function buscarId($id)
    {
        $filtro = "id = '$id'";

        Fabricante::startConexao();
        $result = Fabricante::buscarTodos($filtro);
        
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