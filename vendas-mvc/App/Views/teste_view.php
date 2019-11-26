<?php
  require_once "../config.php";

  $fab = new Fabricante;
  //$fc->setConexao(Conexao::getConnection());

  $fc = new FabricanteController;

  foreach ($fc->buscarTodos() as $f) {
  	print "<br>".$f->getNome();
  }
      
  print '<br>Teste View<br>'; 
?>
