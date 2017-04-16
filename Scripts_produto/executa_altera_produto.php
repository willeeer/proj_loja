<?php 

	require_once "../conectar_bd.php";

	if (!$conexao) {
		header("Location: ../home.php","fudeu");
		session_destroy();
	}
	unset($_GET['Message']);

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		//cliente
		$modelo 		= $_POST['modelo'];
		$descricao		= $_POST['descricao'];
		$preco			= $_POST['preco'];


		$sqlUpdate = "UPDATE `produto` SET `descricao`='$descricao',`preco`='$preco'
		WHERE produto.modelo = '$modelo'";

		$acaoUpdate = mysqli_query($conexao, $sqlUpdate);

		if ($acaoUpdate){
			$msg = "Usuário cadastrado com sucesso!";
			header("Location: ../home.php?msg=".$msg);
		} else {
			echo "erro";
		}
	}
?>