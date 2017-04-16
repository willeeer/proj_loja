<?php 

	require_once "../conectar_bd.php";

	if (!$conexao) {
		header("Location: ../home.php","fudeu");
		session_destroy();
	}

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		//cliente
		$codigo 		= $_POST["codigo"];
		$nome			= $_POST["nome"];
		$preco			= $_POST["preco"];

		echo "'$codigo', '$nome', '$preco'";


		$sqlInserir = "INSERT INTO produto (modelo, descricao, preco) VALUES ('$codigo', '$nome', '$preco')";
	
		$acaoInserir = mysqli_query($conexao, $sqlInserir);

		$consulta = "SELECT id_venda FROM GUARDAID WHERE 1";

		$resultados = mysqli_query($conexao,$consulta);
		$id = mysqli_fetch_assoc($resultados);
		$id_venda = $id["id_venda"];
		echo "$id_venda";



		if ($acaoInserir){
			$msg = "Produto cadastrado com sucesso!";
			header("Location: ../home.php?msg=".$msg);
		} else {
			echo "erro";
		}
	}
?>