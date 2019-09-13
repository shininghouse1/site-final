<?php 
	$nome = strip_tags($_COOKIE['nome']);
	$email = strip_tags($_COOKIE['email']);
	$data = date("Y/m/d");
	$comentario = strip_tags($_POST['comentario']);

	include "banco.php";
	$query = "insert into comments(nome, email, data, comentario) values ('$nome', '$email', '$data', '$comentario')";
	mysqli_query($con, $query);
	header("Refresh: 5, index.php");
	include "anterior.php";
	echo "comentario enviado com sucesso!";
	include "posterior.php";
?>