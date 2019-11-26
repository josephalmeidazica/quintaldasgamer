<?php

class Produto{
	//conexão com o BD
	private static $conn;
	
	private $id;
	private $nome;
	private $descricao;
	private $estoque;
	private $preco_custo;
	private $preco_venda;
	private $img;
	private $fabricante;
	private $categoria;
	private $caracteristicas;

	//get e set
	public function setId($id){	
		$this->id = $id;				
	}
	public function getId(){ 	
		return $this->id; 				
	}
	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	public function getNome()
	{
		return $this->nome;
	}
	public function setDescricao($descricao){	
		$this->descricao = $descricao;	
	}
	public function getDescricao(){ 	
		return $this->descricao; 		
	}
	public function setEstoque($estoque){	
		$this->estoque = $estoque;		
	}
	public function getEstoque(){ 	
		return $this->estoque; 			
	}
	public function setPrecoCusto($preco){	
		$this->preco_custo = $preco;	
	}
	public function getPrecoCusto(){ 	
		return $this->preco_custo; 		
	}
	public function setPrecoVenda($preco){	
		$this->preco_venda = $preco;	
	}
	public function getPrecoVenda(){ 	
		return $this->preco_venda; 		
	}
	public function getImg(){
		return $this->img;
	}
	public function setImg($img){
		$this->img = $img;
	}
	public function setFabricante(Fabricante $f){	
		$this->fabricante = $f;			
	}
	public function getFabricante(){	
		return $this->fabricante;		
	}
	public function setCategoria(Categoria $c){	
		$this->categoria = $c;			
	}
	public function getCategoria(){	
		return $this->categoria;		
	}
	public function getCaracteristicas(){	
		return $this->caracteristicas;	
	}
	public function addCaracteristica($nome, $valor){

		$this->caracteristicas[]= new Caracteristica ($nome,$valor,$this->id);
	}

	public static function startConexao(){
		self::$conn = Conexao::getConnection();
	}
	
	//método que retorna um registro pelo id
	public static function find($id){
		$sql = "SELECT * FROM produto WHERE id = '$id'";
		$result = self::$conn->query($sql);
		return $result->fetchObject(__CLASS__);
	}

	//método de busca com um parâmetro “filtro”
	public static function buscarTodos($filter = ''){
		$sql = "SELECT * FROM produto";
		
		if ($filter) {
			$sql = $sql . " WHERE " . $filter;
		}

		$result = self::$conn->query($sql);
		return $result->fetchAll(PDO::FETCH_CLASS,__CLASS__); //pode retornar + de um registro
	} 

	public function getLastId(){
		$sql = "SELECT max(id) as max FROM produto";
		$result = self::$conn->query($sql);
		$data = $result->fetch(PDO::FETCH_OBJ);
		return $data->max;
	}

	public function delete(){

		$sql = "DELETE FROM produto where id = $this->id ";
		return self::$conn->exec($sql);
	}

	public function salvar(){
		if(empty($this->id)){
			//inserir novo produto
			$this->id = $this->getLastId() + 1;
			$fabId = $this->fabricante->getId();
			$catId = $this->categoria->getId();

			$sql = "INSERT INTO produto (id, nome, descricao, estoque, preco_custo, preco_venda, fabricante_id, categoria_id, imagem)".
					"VALUES ('$this->id','$this->nome','$this->descricao','$this->estoque', '$this->preco_custo','$this->preco_venda','$fabId','$catId','$this->img')";

		}else{
			//atualizar produto
			//inserir o código
		}
		return self::$conn->exec($sql);	//executa instrução SQL
	}

}

?>

