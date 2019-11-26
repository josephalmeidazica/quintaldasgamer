<?php
class Caracteristica{
	
	//conexão com o BD
	private static $conn;

	private $id;
	private $nome;
	private $valor;
	private $produto_id;

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
	public function setValor($valor){
		$this->valor = $valor;
	}
	
	public function getValor(){
		return $this->valor;
	}
	
	public function setIdProduto($id_produto){
		$this->produto_id = $id_produto;
	}
	
	public function getIdProduto(){
		return $this->produto_id;
	}

	public static function startConexao(){
		self::$conn = Conexao::getConnection();
	}
	
	//método que retorna uma caracteristica de um produto
	public static function findId($id){
		$sql = "SELECT * FROM caracteristica WHERE id = '$id'";
		$result = self::$conn->query($sql);
		return $result->fetchObject(__CLASS__);
	}

	//método de busca com um parâmetro “filtro”
	public static function buscarTodos($filter = ''){
		$sql = "SELECT * FROM caracteristica";

		if ($filter) {
			$sql = $sql . " WHERE " . $filter;
		}
		$result = self::$conn->query($sql);

		return $result->fetchAll(PDO::FETCH_CLASS, __CLASS__); //pode retornar + de um registro
	}
	
	public static function findIdProduto($produto_id){
		$sql = "SELECT * FROM caracteristica WHERE produto_id = '$produto_id'";
		$result = self::$conn->query($sql);
		return $result->fetchAll(PDO::FETCH_CLASS, __CLASS__); //pode retornar + de um registro
	}

	public function salvar(){
		$sql = "INSERT INTO caracteristica(nome, valor, produto_id)".
					"VALUES ('$this->nome','$this->valor', '$this->produto_id')";
		return self::$conn->exec($sql);	//executa instrução SQL
	}

}
?>
