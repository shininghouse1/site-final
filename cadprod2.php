<?php 
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$telefone = $_POST['telefone'];
	$categoria = $_POST['categoria'];
	$estado = $_POST['estado'];
	$imagem = microtime();

	include "upload.php";


	include "banco.php";
	$query = "insert into produto(titulo, descricao, telefone, imagem, categoria, estado) values ('$titulo', '$descricao', '$telefone', '$imagem', '$categoria', '$estado')";
	mysqli_query($con, $query);
	header("Refresh: 5, cadprod.php");
	include "anterior.php";
	echo "Produto cadastrado com sucesso!";
	include "posterior.php";
?>