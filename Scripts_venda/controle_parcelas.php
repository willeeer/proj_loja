<?php 

require_once "../conectar_bd.php";
session_start();
session_regenerate_id();

if (!$conexao) {
	header("Location: ../home.php","fudeu");
	session_destroy();
}

$codigo_venda = $_POST['cod_venda'];

$consultaLista = "SELECT V.modelo_produto, P.descricao, P.preco, DATE_FORMAT( V.data_venda, '%d/%m/%Y') as data FROM produto P INNER JOIN vendas V ON P.modelo = V.modelo_produto WHERE V.codigo_venda = '$codigo_venda'";

$resultados = mysqli_query($conexao, $consultaLista);
$num_linhas = mysqli_num_rows($resultados);
mysqli_data_seek($resultados, 0);

$consultaParcela = "SELECT `id`, `id_venda_produto`, `num_parcela`, `codigo_venda`, `cpf_cliente`, `modelo_produto`, DATE_FORMAT( `data_vencimento`, '%d/%m/%Y') as data_vencimento, `data_pagamento`, `status_parcela` FROM `venda_produto_parcela` WHERE codigo_venda = '$codigo_venda'";
$resultadosParcela = mysqli_query($conexao,$consultaParcela);

$id_data_pagamento = 1;
$id_status_pagamento =1;

$_SESSION['num_linhas'] = $num_linhas;
$_SESSION['cod_venda'] = $codigo_venda;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<title>Home Page</title>
</head>
<body>
	<CENTER><h1>Carnês de pagamento </h1></CENTER>
	<body>
	<form action = "executa_parcelas.php" method = "POST">
	<div align = "center">
	
		<?php
			for($j=0;$j<$num_linhas;$j++){
				$dadosConsulta = mysqli_fetch_assoc($resultados);
				$modelo = $dadosConsulta['modelo_produto'];
				$descricao = $dadosConsulta['descricao'];
				$data = $dadosConsulta['data'];
				$preco = $dadosConsulta['preco'];

				//$dataParcela = new DateTime($dadosConsulta['data']);
				//$dataParcela->modify('+1 day');
				//echo "<br/>";
				?>

				<table class="table table-striped" border=3>
				<CENTER><h3> <?= $descricao . ". Pedido realizado no dia: " . $data . ". Preço: R$ " . $preco?></h3></CENTER>
				<tr>
					<th>Parcela</th>
					<th>Vencimento</th>
					<th>Data de pagamento</th>
					<th>Status de pagamento</th>	
				</tr>	
				<?php
				for($i=1; $i<13 ; $i++){ 
					$dadosParcela = mysqli_fetch_assoc($resultadosParcela);
					?>
				<tr>
					<td align = "center"><?= $dadosParcela['num_parcela'] ?></td>
					<td align = "center"><?= $dadosParcela['data_vencimento'] ?></td>
					<td align = "center">
					<?php
					if($dadosParcela['data_pagamento'] ==  NULL){
						echo "<input id='data_pagamento".$id_data_pagamento."' type='date' name='data_pagamento".$id_data_pagamento."'>";
					}else{
						echo "<input id='nasc' type='date' name='data_pagamento".$id_data_pagamento."' value = ".$dadosParcela['data_pagamento'].">";
					} 
					?>
					</td>
					<td align = "center">
					<?php 
						echo "<select id='status".$id_status_pagamento."'  name = 'status".$id_status_pagamento."'>";
						if($dadosParcela['status_parcela'] == "A VENCER"){
							echo "<option> ". $dadosParcela['status_parcela']  . "</option>";
							echo "<option>PAGO</option>";
							echo "<option>ATRASADO</option>";
						}else if($dadosParcela['status_parcela'] == "PAGO"){
							echo "<option> ". $dadosParcela['status_parcela']  . "</option>";
							echo "<option>A VENCER</option>";
							echo "<option>ATRASADO</option>";

						}else{
							echo "<option> ". $dadosParcela['status_parcela']  . "</option>";
							echo "<option>A VENCER</option>";
							echo "<option>PAGO</option>";
						}
					?>	
					</td>
				</tr>
				<?php
				$id_data_pagamento = $id_data_pagamento+1;
				$id_status_pagamento = $id_status_pagamento+1;
				}
				//echo '<br/>';
				
			}
		?>
	

	</table>
	<br/>
		<input type="submit" name="Submit" value="Dar baixa nos dados">
		<input type="reset" name="Submit2" value="Limpar">
		<input type=button value="Retornar" onclick="window.location.href='home.php';">
	</form>
	<br/>
	<form action = "remessa.php" method = "POST" name = "form_cadastro_venda">
				<input type="submit" name="Submit" value="Gerar Carne">
				<input type="reset" name="Submit2" value="Limpar">
		</form>
</body>
</html>