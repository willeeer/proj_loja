<?php 
	
	header('Content-Type: text/html; charset=utf-8');

	$host  = "localhost";
	$user  = "root";
	$senha = "";
	$banco = "gean_marketing";

	// retorna um objeto mysqli
	$conexao = @mysqli_connect($host, $user, $senha, $banco);
	if(!$conexao)
		die("falha");

	
		// Aqui está o segredo
	$sql= "SET NAMES 'utf8'";
	mysqli_query($conexao, $sql);
	$sql = 'SET character_set_connection=utf8';
	mysqli_query($conexao, $sql);
	$sql ='SET character_set_client=utf8';
	mysqli_query($conexao, $sql);
	$sql ='SET character_set_results=utf8';
	mysqli_query($conexao, $sql);

 ?>