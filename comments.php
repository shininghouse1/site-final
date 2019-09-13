<?php 
	if(empty($_COOKIE['nome'])){
		header("Location: login.php");
	}
	$nome = $_COOKIE['nome'];
	$email = $_COOKIE['email'];
	$nivel = $_COOKIE['nivel'];
	
	include "anterior.php";
?>
<h1>Deixe o seu comentário!</h1>
<form action="comments2.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="comentario">Deixe o seu comentário</label>
        <input type="text" required name="comentario" id="comentario" class="form-control" />
  </div>
  <button type="submit" class="btn btn-primary">Enviar comentário</button>
</form>
	
<?php 
	include "posterior.php";
?>