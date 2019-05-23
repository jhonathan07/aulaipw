<?php
	include("cabecalho.php");
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			&nbsp;
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h2>Cadastro de Produto</h2>
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
				    <label for="curso">descricao</label>
				    <input type="text" class="form-control" id="descricao" name="descricao">
				  </div>
				</div>
				<div class="col-sm-6">  
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6">
			  		<div class="form-group"	>
			   		 <label for="descricao">valor de venda</label>
			    			<textarea class="form-control" id="valor de venda" name="valor de venda">
			    </textarea>
			  		</div>
				</div>
			</div>
						
			
			  <button type="submit" class="btn btn-primary">CADASTRAR</button>
			</form> 	
		</div><!--fecha coluna principal-->
	</div><!--fecha linha principal-->
</div><!--fecha container-->

<?php
	include("rodape.php");
?>