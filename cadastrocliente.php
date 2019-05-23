<?php
	include("cabecalho.php");
?>
<form action = "controllercliente.php" method="POST">
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			&nbsp;
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h2>Cadastro de Clientes</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">


							
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
					    <label for="titulo">nome:</label>
					    <input type="text" class="form-control" id="titulo" name="nome">
			  		</div>
				</div>
			</div>
				
				
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">telefone</label>
				    <input type="text" class="form-control" id="telefone" name="telefone">
				  </div>
				</div>
				<div class="col-sm-6">  
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6">
			  		<div class="form-group"	>
			   		 <label for="descricao">celular</label>
			    			<textarea class="form-control" id="celular" name="celular">
			    </textarea>
			  		</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">email</label>
				    <input type="text" class="form-control" id="email" name="email">
				  </div>
				</div>
				<div class="col-sm-6">  
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">endereco</label>
				    <input type="text" class="form-control" id="endereco" name="endereco">
				  </div>
				</div>
				<div class="col-sm-6">  
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">numero</label>
				    <input type="text" class="form-control" id="numero" name="numero">
				  </div>
				</div>
				<div class="col-sm-6">  
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">complemento</label>
				    <input type="text" class="form-control" id="complemento" name="complemento">
				  </div>
				</div>
				<div class="col-sm-6">  
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">bairro</label>
				    <input type="text" class="form-control" id="bairro" name="bairro">
				  </div>
				</div>
				<div class="col-sm-6">  
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">cidade</label>
				    <input type="text" class="form-control" id="cidade" name="cidade">
				  </div>
				</div>
				<div class="col-sm-6">  
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">cep</label>
				    <input type="text" class="form-control" id="cep" name="cep">
				  </div>
				</div>
				<div class="col-sm-6">  
				</div>
			</div>
			
			  <button type="submit" class="btn btn-primary">CADASTRAR</button>
			</form> 	
		</div>
	</div>
</div>
