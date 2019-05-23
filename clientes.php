<?php	
	
class Clientes{
	public $id, $nome, $telefone, $celular, $email, $endereco;
	public $numero, $complemento, $bairro, $cidade, $cep;

	public function setid($id){
		$this->id = $id;
	}
	public function setNome($nome){
		$this->Nome = $nome;	
	}
	public function setTelefone($telefone){
		$this->Telefone = $telefone;
	}
	public function setCelular($celular){
		$this->Celular = $celular;
	}
	public function setEmail($email){
		$this->Email = $email;
	}
	public function setEndereco($endereco){
		$this->Endereco = $endereco;
	}
	public function setNumero($numero){
		$this->Numero = $numero;	
	}
	public function setComplemnto($complemento){
		$this->Complemento = $complemento;	
	}
	public function setBairro($bairro){
		$this->Bairro = $bairro;	
	}
	public function setCidade($cidade){
		$this->Cidade = $cidade;	
	}
	public function setCep($cep){
		$this->Cep = $cep;	
	}
	

	public function getid(){
		return $this->id;
	}
	public function getNome(){
		return $this->Nome;
	}
	public function getTelefone(){
		return $this->Telefone;
	}
	public function getCelular(){
		return $this->Celular;
	}
	public function getEmail(){
		return $this->Email;
	}
	public function getEndereco(){
		return $this->Endereco;
	}
	public function getNumero(){
		return $this->Numero;
	}
	public function getComplemento(){
		return $this->Complemento;
	}
	public function getBairro(){
		return $this->Bairro;
	}
	public function getCidade(){
		return $this->Cidade;
	}
	public function getCep(){
		return $this->Cep;
	}

	public function cadastrar($dados){
		$dados=array($nome, $telefone, $celular, $email, $endereco, $numero, $complemento, $bairro, $cidade, $cep);
		
		$this->setNome($nome);
		$this->setTelefone($telefone);
		$this->setCelular($celular);
		$this->setEmail($email);
		$this->setEndereco($endereco);
		$this->setNumero($numero);		
		$this->setComplemento($complemento);
		$this->setBairro($bairro);
		$this->setCidade($cidade);
		$this->setCep($cep);
		
		$conectar = new mysqli("localhost","root","","jhonathan");
	echo	$sql = "insert into clientes 
					(nome, telefone, celular, email, endereco, numero, complemento, bairro, cidade, cep)
					values (
					'{$this->getNome()}', 
					'{$this->getTelefone()}',
					'{$this->getCelular()}', 
					'{$this->getEmail()}',
					'{$this->getEndereco()}'
					'{$this->getNumero()}'
					'{$this->getComplemento()}'
					'{$this->getBairro()}'
					'{$this->getCidade()}'
					'{$this->getCep()}'
					)		
		";		
	exit;	
	}	
		public function buscarTodos(){
		$sql = "select * from clientes ORDER by titulo desc ";
		$conectar = new mysqli("localhost","root","","jhonathan");
		$listar = $conectar->query($sql);
		$clientes = array();
		/*while($linha = $listar->fetch_array()) {
			$clientes[] = $linha;
		}*/
}
}
?>