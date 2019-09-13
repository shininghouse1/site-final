<?php 
	if(empty($_COOKIE['nivel'])){
		header("Location: index.php");
	}
	$nivel = $_COOKIE['nivel'];
	if($nivel == 2){
		header("Location: perfil.php");	
	}
	include "anterior.php";
?>

	<h1>
		Cadastro do serviço
	</h1>
	<form action="cadprod2.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="titulo">Nome</label>
			<input type="text" required name="titulo" id="titulo" class="form-control" />
		</div>
		<div class="form-group">
			<label for="descricao">Breve descrição do serviço</label>
			<input type="text" required name="descricao" id="descricao" class="form-control" />
		</div>
		<div class="form-group">
			<label for="telefone">Telefone </label>
			<input type="number" required name="telefone" id="telefone" class="form-control" />
		</div>
		<div class="form-group">
			<label for="categoria">Categoria</label>
			<select name="categoria" id="categoria" class="form-control">
				<option value="domestico">Doméstico</option>
				<option value="empresarial">Empresarial</option>
			</select>
		</div>
		<div class="form-group">
			<label for="formestado">Estado</label>
				<select name="estado" class="form-control">
					<option value="68">Acre</option>
					<option value="82">Alagoas</option>
					<option value="96">Amapá</option>
					<option value="92">Amazonas</option>
					<option value="71">Bahia</option>
					<option value="88">Ceará</option>
					<option value="61">Distrito Federal</option>
					<option value="27">Espírito Santo</option>
					<option value="62">Goiás</option>
					<option value="92">Maranhão</option>
					<option value="21">Rio de Janeiro</option>
				</select>
		</div>
		<div class="form-group">
			<label>Escolha sua foto!</label>
			<input type="file" name="arquivo" class="form-control" accept="image/jpeg, image/png" required />
		</div>
		<button type="submit" class="btn btn-primary">Cadastrar Produto</button>
	</form>
<?php 
	include "posterior.php";
?>