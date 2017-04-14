<?php 

	require_once "conectar_bd.php";

	if (!$conexao) {
		header("Location: home.php","fudeu");
		session_destroy();
	}

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		//cliente
		$nome 			= $_POST["nome"];
		$cpf			= $_POST["cpf"];

		//fazer verificação de usuario existente

		$sqlInserir = "INSERT INTO vendedor (cpf,nome) 
		VALUES 
		( '$cpf','$nome') ";



	
		$acaoInserir = mysqli_query($conexao, $sqlInserir);

		if ($acaoInserir){
			$msg = "Usuário cadastrado com sucesso!";
			header("Location: home.php?msg=".$msg);
		} else {
			echo "erro";
		}
	}
?>