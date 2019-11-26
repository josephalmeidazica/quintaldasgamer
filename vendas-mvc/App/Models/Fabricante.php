<?php

class Fabricante{

	//conexão com o BD
	private static $conn;

	private $id;
	private $nome;
	private $site;

	public function setId($id){
		$this->id = $id; 
	}
	public function getId(){
		return $this->id; 
	}
	public function setNome($nome){
		$this->nome = $nome; 
	}
	public function getNome(){
		return $this->nome;
	}
	public function setSite($site){
		$this->site = $site; 
	}
	public function getSite(){
		return $this->site; 
	}

	public static function startConexao()
	{
		self::$conn = Conexao::getConnection();
	}
	public static function buscarTodos($filter=''){
		$sql = "SELECT * FROM fabricante";
		
		if ($filter) {
			$sql = $sql . " WHERE ".$filter;
		}

		$result = self::$conn->query($sql);
		return $result->fetchAll(PDO::FETCH_CLASS,__CLASS__); //pode retornar + de um registro
	}

	public static function buscarId($id){
		$sql = "SELECT * FROM fabricante WHERE id = '$id'";
		$result = self::$conn->query($sql);
		return $result->fetchObject(__CLASS__);
	}
		
	public function salvar(){
		$sql = "INSERT INTO fabricante(nome, site)".
					"VALUES ('$this->nome','$this->site')";
		return self::$conn->exec($sql);	//executa instrução SQL
	}
}

?>
