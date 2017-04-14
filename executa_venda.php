<?php 

	require_once "conectar_bd.php";
	session_start();
	session_regenerate_id();

	if (!$conexao) {
		header("Location: home.php","fudeu");
		session_destroy();
	}

	$cpf = $_SESSION['cpf'];
	$qtd = $_SESSION['qtdProdutos'];


	$consultaIDvenda = "SELECT * FROM guardaid";
	$resultadosIDvenda = mysqli_query($conexao,$consultaIDvenda);
	$linhaIDvenda = mysqli_fetch_assoc($resultadosIDvenda);
	$codVenda = $linhaIDvenda['id_venda'];



	echo $codVenda;
	

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		//cliente
		

		for($i=0; $i<$qtd;$i++){
			//echo $_POST['modelo'.$i];
			//echo $_POST['data_venda'.$i];
			$modelo[$i] 		= $_POST['modelo'.$i];
			$descricao[$i]		= $_POST['descricao'.$i];
			$vendedor[$i]		= $_POST['vendedor'.$i];
			$data_venda[$i]		= $_POST["bday".$i];
			$observacao[$i]		= $_POST['observacao'.$i];

			$consultaVendedorCPF = "SELECT cpf from vendedor WHERE vendedor.nome = '$vendedor[$i]'";
			$resultadosVendedorCPF = mysqli_query($conexao,$consultaVendedorCPF);
			$linhaVendedorCPF = mysqli_fetch_assoc($resultadosVendedorCPF);
			$cpfVendedor[$i] = $linhaVendedorCPF['cpf'];

			$dataParcela[$i] = new DateTime($data_venda[$i]);
			$dataParcela[$i]->modify('+10 day');
			$novaData[$i] = $dataParcela[$i]->format('Y-m-d');
			//var_dump($data_venda[$i]);
			//var_dump($novaData);

			$id_venda_produto = 1;

		}

		for($i=0; $i<$qtd;$i++){

			$sqlInsert = "INSERT INTO vendas (`codigo_venda`, `cpf_cliente`, `cpf_funcionario`, `modelo_produto`, `data_venda`, `observacao`) VALUES
			('$codVenda', '$cpf','$cpfVendedor[$i]','$modelo[$i]','$data_venda[$i]','$observacao[$i]' )";
		
			$acaoInsert = mysqli_query($conexao, $sqlInsert);

			for($j=1; $j<13;$j++){
				$sqlInsert2 = "INSERT INTO venda_produto_parcela (`id_venda_produto`,`num_parcela`, `codigo_venda`, `cpf_cliente`, `modelo_produto`, `data_vencimento`) 
				VALUES ($id_venda_produto,'$j','$codVenda','$cpf','$modelo[$i]','$novaData[$i]')";

				//echo "'Parcela $j','$codVenda','$cpf','$modelo[$i]','$novaData'" . "<br/>";
				//echo "entrei $j" . "<br/>";
				$acaoInsert = mysqli_query($conexao,$sqlInsert2);

				$dataParcela[$i]->modify('+30 day');
				$novaData[$i] = $dataParcela[$i]->format('Y-m-d');
			}
			$id_venda_produto++;

			if ($acaoInsert && $i == $qtd-1){
				//atualizar o guardaiD
				$codVenda = $codVenda +1;

				$sqlUpdate = "UPDATE `guardaid` SET `id_venda`='$codVenda'";
				$acaoUpdate = mysqli_query($conexao, $sqlUpdate);


				$msg = "Venda cadastrada com sucesso!";
				header("Location: home.php?msg=".$msg);
			} else {
				echo "erro";
			}

		}	

	}

	
?>