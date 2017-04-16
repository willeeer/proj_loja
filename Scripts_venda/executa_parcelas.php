<?php 

	require_once "../conectar_bd.php";
	session_start();
	session_regenerate_id();

	if (!$conexao) {
		header("Location: ../home.php","fudeu");
		session_destroy();
	}

	$num_produtos = $_SESSION['num_linhas'];
	$codigo_venda = $_SESSION['cod_venda'];

	$id_venda_produto = 1;
	$num_parcela = 1;	

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		for($i=1; $i<($num_produtos*12)+1;$i++){

			$status = $_POST['status'.$i];
			$data_pagamento = $_POST['data_pagamento'.$i];
			echo $data_pagamento . "<br/>";


			$sqlUpdate = "UPDATE `venda_produto_parcela` SET `data_pagamento`='$data_pagamento',`status_parcela`='$status' WHERE codigo_venda = '$codigo_venda' AND id_venda_produto = $id_venda_produto AND num_parcela ='$num_parcela'";

			$acaoUpdate = mysqli_query($conexao,$sqlUpdate);


			$num_parcela = $num_parcela + 1;
			if($num_parcela == 13){
				$num_parcela = 1;
				$id_venda_produto = $id_venda_produto +1;
			}

		}

		if ($acaoUpdate){

			$msg = "Venda cadastrada com sucesso!";
			header("Location: ../home.php?msg=".$msg);
		} else {
			echo "erro";
		}
	}	
?>