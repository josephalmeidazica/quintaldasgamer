<?php

class Usuario{

	//conexão com o BD
	private static $conn;

	private $id;
	private $nome;
	private $login;
	private $senha;
	private $tipo;

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
	public function setLogin($login){
		$this->login = $login; 
	}
	public function getLogin(){
		return $this->login; 
	}
	public function setSenha($senha){
		$this->senha = $senha; 
	}
	public function getSenha(){
		return $this->senha; 
	}
	public function setTipo($tipo){
		$this->tipo = $tipo; 
	}
	public function getTipo(){
		return $this->tipo; 
	}

	public static function startConexao()
	{
		self::$conn = Conexao::getConnection();
	}
	public static function buscarTodos($filter=''){
		$sql = "SELECT * FROM usuario";
		
		if ($filter) {
			$sql = $sql . " WHERE ".$filter;
		}

		$result = self::$conn->query($sql);
		return $result->fetchAll(PDO::FETCH_CLASS,__CLASS__); //pode retornar + de um registro
	}

	public static function buscarId($id){
		$sql = "SELECT * FROM usuario WHERE id = '$id'";
		$result = self::$conn->query($sql);
		return $result->fetchObject(__CLASS__);
	}
		
	public function salvar($id){
		$sql = "UPDATE usuario SET nome = '$this->nome', login = '$this->login',senha = '$this->senha'".
					 " WHERE id='$id'";
		return self::$conn->exec($sql);	//executa instrução SQL
	}
	public function novo(){
		$sql = "INSERT INTO usuario(nome, login,senha,tipo)".
					"VALUES ('$this->nome','$this->login','$this->senha','0')";
		return self::$conn->exec($sql);	//executa instrução SQL
	}
}

?>
