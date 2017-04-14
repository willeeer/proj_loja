<?php 

	require_once "conectar_bd.php";

	if (!$conexao) {
		header("Location: home.php","fudeu");
		session_destroy();
	}

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		//cliente
		$cpf = $_POST['cpf'];
		echo $cpf ." ";

		$selectENd = "SELECT E.cep, E.numero FROM endereco_residencial E WHERE E.cpf_cliente = '$cpf'";
		$resultadoSelect = mysqli_query($conexao,$selectENd);

		$linha = mysqli_fetch_assoc($resultadoSelect);

		$numero = $linha['numero'];
		$cep = $linha['cep'];

		echo $cep . " ";
		echo $numero . " ";

		$deleteEndereco = "DELETE FROM `endereco_residencial` WHERE `endereco_residencial`.`cep` = '$cep' AND `endereco_residencial`.`numero` = '$numero'";
		$resDeletaEnd = mysqli_query($conexao,$deleteEndereco);

		$deleteVenda = "DELETE FROM vendas WHERE vendas.cpf_cliente = '$cpf'";
		$resDeletaVenda = mysqli_query($conexao,$deleteVenda);

		$deleteCliente = "DELETE FROM `cliente` WHERE `cliente`.`cpf` = '$cpf'";
		$resDeletaCli = mysqli_query($conexao,$deleteCliente);

		/*
		$verifica = 0;

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
		*/

		if ($resDeletaEnd && $resDeletaCli && $resDeletaVenda){
			$msg = "Usuário deletado com sucesso!";
			//header("Location: home.php?msg=".$msg);
			header("Location: home.php?Message=" . urlencode($msg));
		} else {
			echo "erro";
		}
	}
?>