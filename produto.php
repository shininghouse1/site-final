<?php 
	$id = $_GET['id'];
	include "banco.php";
	$query = "select * from produto where idproduto = $id";
	$exec = mysqli_query($con, $query);

	while($p = mysqli_fetch_array($exec)){
		$titulo = $p['titulo'];
		$telefone = $p['telefone'];
		$imagem = $p['imagem'];
		$descricao = $p['descricao'];
		$categoria = $p['categoria'];
		$estado = $p['estado'];
	}

	include "anterior.php";

?>
	<div class="card mt-5 mb-5">
		<div class="card-header bg-primary text-white">
			<h1><?=$titulo?></h1>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<img src="produtos/<?=$imagem?>" style="width:100%">
				</div>
				<div class="col-xs-12 col-md-8">
					<h5>Descrição: <?=$descricao?></h5>
					<h5>Categoria: <?=$categoria?></h5>
					<h5>Telefone: (<?=$estado?>) <?=$telefone?></h5>
				</div>
			</div>
			
		</div>
	</div>
<?php 
	include "posterior.php";
?>