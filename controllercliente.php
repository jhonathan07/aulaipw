<?php  
	include ("clientes.php");
	$objetoClientes = new Clientes();				
	if(filter_input(INPUT_POST, "Nome") &&
		filter_input(INPUT_POST, "Telefone") &&
		filter_input(INPUT_POST, "Celular") &&
		filter_input(INPUT_POST, "Email") &&
		filter_input(INPUT_POST, "Endereco") &&
		filter_input(INPUT_POST, "Numero") &&
		filter_input(INPUT_POST, "Complemento") &&
		filter_input(INPUT_POST, "Bairro") &&
		filter_input(INPUT_POST, "Cidade") &&
		filter_input(INPUT_POST, "Cep") 
	) {
	$nome = filter_input(INPUT_POST, "Nome");
	$telefone = filter_input(INPUT_POST, "Telefone");
	$celular = filter_input(INPUT_POST, "Celular");
	$email = filter_input(INPUT_POST, "Email");
	$endereco = filter_input(INPUT_POST, "Endereco");
	$numero = filter_input(INPUT_POST, "Numero");
	$complemento = filter_input(INPUT_POST, "Complemento");
	$bairro = filter_input(INPUT_POST, " Bairro");
	$cidade= filter_input(INPUT_POST, "Cidade");
	$cep= filter_input(INPUT_POST, "Cep");
	$dados=array($nome,$telefone,$celular,$email,$endereco,$numero,$complemento,$bairro,$cidade,$cep);
	
	$objetoClientes->cadastrar($dados);
}else{
echo "campos nao preenchidos";
}

?>