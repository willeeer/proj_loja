<?php 

	require_once "../conectar_bd.php";

	if (!$conexao) {
		header("Location: ../home.php","fudeu");
		session_destroy();
	}
	unset($_GET['Message']);

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		//cliente
		$cpf 			= $_POST["cpf"];
		
		$cep 			= $_POST["cep"];
		$nome_rua 		= $_POST["nomerua"];
		$numero 		= $_POST["numero"];
		$uf_end  		= $_POST["uf"];
		$cidade 		= $_POST["cidade"];
		$bairro 		= $_POST["bairro"];
		$complemento 	= $_POST["complemento"];
		$tel_casa 		= $_POST["fonecasa"];
		$tel_cel 		= $_POST["fonecel"];
		$cpf_cliente 	= $_POST["cpf"];
		
		echo "'$cpf', '$cep', '$logradouro', '$nome_rua', '$numero', '$uf_end', '$cidade', '$bairro', '$complemento', '$ramal', '$tel_casa', '$tel_cel', '$cpf_cliente";


		$sqlUpdate = "UPDATE `endereco_residencial` SET `cep`='$cep',`nome_rua`='$nome_rua',`numero`='$numero',`uf_end`='$uf_end',
		`cidade`='$cidade',`bairro`='$bairro',`complemento`='$complemento',`tel_res`='$tel_casa',`tel_cel`='$tel_cel' 
		WHERE endereco_residencial.cpf_cliente = '$cpf'";

		$acaoUpdate = mysqli_query($conexao, $sqlUpdate);

		//fazer verificação de cpf

		if ($acaoUpdate){
			$msg = "Usuário cadastrado com sucesso!";
			header("Location: ../home.php?msg=".$msg);
		} else {
			echo "erro";
		}
	}
?>