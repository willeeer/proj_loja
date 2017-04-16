<?php 

	require_once "../conectar_bd.php";

	if (!$conexao) {
		header("Location: ../home.php","fudeu");
		session_destroy();
	}

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		//cliente
		$nome 			= $_POST["nome"];
		$sexo			= $_POST["sexo"];
		$cpf			= $_POST["cpf"];
		$identidade 	= $_POST["identidade"];
		$data_nasc		= $_POST["bday"];
		$email			= $_POST["email"];
		$campanha		= $_POST["campanha"];
		//endereço residencial
		
		$cep 			= $_POST["cep"];
		$nome_rua 		= $_POST["nomerua"];
		$numero 		= $_POST["numero"];
		$uf_end  		= $_POST["uf_end"];
		$cidade 		= $_POST["cidade"];
		$bairro 		= $_POST["bairro"];
		$complemento 	= $_POST["complemento"];
		$tel_casa 		= $_POST["fonecasa"];
		$tel_cel 		= $_POST["fonecel"];
		$cpf_cliente 	= $_POST["cpf"];
		
		unset($_GET['Message']);

		$verifica = 0;

		$consultaCPF = "SELECT cpf FROM cliente";
		$resultadosCPF = mysqli_query($conexao,$consultaCPF);

		while($linha = mysqli_fetch_array($resultadosCPF)){
			if($linha["cpf"] == $_POST["cpf"]){
				$verifica = 1;
			}
		}

		if($verifica == 1){
			$msg = "Usuário com este cpf já cadastrado";
			//header("Location: home.php?msg=".$msg);
			header("Location: home.php?Message=" . urlencode($msg));
		}

		//verificação de CEP e Numero

		$verifica = 0;
		
		$consultaCEP = "SELECT cep, numero FROM endereco_residencial";
		$resultadosCEP = mysqli_query($conexao,$consultaCEP);


		while($linha = mysqli_fetch_array($resultadosCEP)){
			if($linha["cep"] == $_POST["cep"] && $linha["numero"] == $_POST["numero"]){
				$verifica = 1;
			}
		}

		if($verifica == 1){
			$msg = "Usuário com este CEP e número já cadastrado.";
			//header("Location: home.php?msg=".$msg);
			header("Location: home.php?Message=" . urlencode($msg));
		}else{

			$sqlInserir = "INSERT INTO cliente (nome, sexo, cpf, identidade, data_nasc, email) 
			VALUES 
			('$nome', '$sexo', '$cpf', '$identidade', '$data_nasc', '$email')";

			$sqlInserir2 = "INSERT INTO endereco_residencial (cep, nome_rua, numero, uf_end, cidade, bairro, complemento, tel_res, tel_cel, cpf_cliente) VALUES
			('$cep', '$nome_rua', '$numero', '$uf_end', '$cidade', '$bairro', '$complemento', '$tel_casa','$tel_cel', '$cpf_cliente') ";

		}

	
		$acaoInserir = mysqli_query($conexao, $sqlInserir);

		$acaoInserir2 = mysqli_query($conexao, $sqlInserir2);

		if ($acaoInserir && $acaoInserir2){
			$msg = "Usuário cadastrado com sucesso!";
			//header("Location: home.php?msg=".$msg);
			header("Location: ../home.php?Message=" . urlencode($msg));
		} else {
			echo "erro";
		}
	}
?>