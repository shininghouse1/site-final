<?php 
	include "anterior.php";
?>

<h1>Cadastro de usuário</h1>

<form method="post" action="cadastrar2.php">
	<div class="form-group">
		<label for="formnome">Nome</label>
		<input type="text" name="nome" id="formnome" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formemail">E-mail</label>
		<input type="email" name="email" id="formemail" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formsenha">Senha</label>
		<input type="password" name="senha" id="formsenha" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formcsenha">Confirmar Senha</label>
		<input type="password" onblur="verifica()" name="csenha" id="formcsenha" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formendereco">Endereço</label>
		<input type="text" name="endereco" id="formendereco" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formbairro">Bairro</label>
		<input type="text" name="bairro" id="formbairro" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formcidade">Cidade</label>
		<input type="text" name="cidade" id="formcidade" class="form-control" />
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
		<div class="form-group">
			<button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
		</div>
	</div>
</form>

<?php 
	include "posterior.php";
?>
<script>
	function verifica(){
		x= document.getElementById("formsenha").value;
		y= document.getElementById("formcsenha").value;
		if(x!=y){
			alert("Os valores da senha não conferem, por favor digite a senha novamente!");
			document.getElementById("formsenha").value = "";
			document.getElementById("formcsenha").value = "";
			document.getElementById("formsenha").focus();
		}
	}
</script>