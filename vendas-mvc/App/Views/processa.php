<?php
	$id = "";
	$nome = "";
	$cidade = "";
	$msg = "";
	$msg_type = "";

	$host = "localhost";
	$dbusername = "root";
	$dbpassword= "";
	$dbname = "web2";

	
	$conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname) or die('Erro de conexao: '.mysqli_connect_error());
	
	if(isset($_POST['salvar'])){
		$nome = $_POST["nome"];
	    $cidade = $_POST["cidade"];
		
		$sql = "INSERT INTO origem (nome,cidade) values ('$nome','$cidade')";

		//verifica erro na inserção dos dados
		if(!mysqli_query($conn,$sql)){
			die('Erro de INSERT: '.mysqli_connect_error());
		}else{
			$msg = "Dados cadastrados!";
			$msg_type = "success";
		}
		
	}	

	//verifica se o botão delete foi pressionado
	if(isset ($_GET['idDelete'])){
		$id = $_GET['idDelete'];
		
		$sql = "DELETE FROM origem WHERE id='$id'";
		
		//verifica erro na exclusão dos dados
		if(!mysqli_query($conn,$sql)){
			die('Erro no DELETE: '.mysqli_connect_error());
		}else{
			$msg = "Registro deletado!";
			$msg_type = "danger";
		}
		


	}

	//verifica se o botão Editar foi pressionado
	if(isset ($_GET['idEdit'])){
		
		$id = $_GET['idEdit'];
		$sql = "SELECT * FROM origem WHERE id='$id'";
		
		//executa o $sql
		$result = mysqli_query($conn,$sql) or die('Erro no SELECT ('.mysqli_connect_errno().')'.mysqli_connect_error());
		
		//verifica se encontrou um registro
		if($result){
			
			$linha = mysqli_fetch_assoc($result);

			//atualiza os valores das variáveis nome e cidade
			$nome = $linha['nome'];
			$cidade = $linha['cidade'];
			
			
		}

	}

	//verifica se o botão Atualizar foi pressionado
	if(isset ($_POST['atualizar'])){
		
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$cidade = $_POST['cidade'];
		
		$sql = "UPDATE origem SET nome='$nome', cidade='$cidade' WHERE id='$id'";
		
		//verifica erro na atualização dos dados
		if(!mysqli_query($conn,$sql)){
			die('Erro no UPDATE: '.mysqli_connect_error());
		}else{
			$msg  = "Dados atualizados!";
			$msg_type = "warning";
		}
	}

?>

