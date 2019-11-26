<?php 

    if(!isset($_SESSION))
        session_start();

    define('APP_HOST'       , $_SERVER['HTTP_HOST'] . "/vendas-mvc");
    define('TITLE'          , "Aplicação MVC em PHP");
    define('DB_HOST'        , "localhost");
    define('DB_USER'        , "root");
    define('DB_PASSWORD'    , "");
    define('DB_NAME'        , "appvenda");
    define('DB_DRIVER'      , "mysql");
    define('DB_PORT'        , "3306");

    if(!isset($_SESSION['PATH'])){
        define('PATH', realpath('./'));
        $_SESSION['PATH'] = PATH;
    }else{
        define('PATH', $_SESSION['PATH']);
    } 

require PATH."/App/Lib/Sessao.php";
require PATH."/App/Lib/Conexao.php";
require PATH."/App/Controllers/HomeController.php";
require PATH."/App/Models/Categoria.php";
require PATH."/App/Models/Caracteristica.php";
require PATH."/App/Models/Fabricante.php";
require PATH."/App/Models/Produto.php";
require PATH."/App/Models/Usuario.php";
require PATH."/App/Controllers/CategoriaController.php";
require PATH."/App/Controllers/FabricanteController.php";
require PATH ."/App/Controllers/ProdutoController.php";
require PATH ."/App/Controllers/CaracteristicaController.php";
require PATH ."/App/Controllers/UsuarioController.php";

?>