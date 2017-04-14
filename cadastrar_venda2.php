<?php

require_once "conectar_bd.php";

if (!$conexao) {
	header("Location: home.php","fudeu");
	session_destroy();
}

$consultaProduto = "SELECT * FROM produto";
$resultadosProduto = mysqli_query($conexao,$consultaProduto);

$consultaVendedor = "SELECT * FROM vendedor";
$resultadosVendedor = msqli_query($conexao,$consultaVendedor);

while($linha = mysqli_fetch_array($resultadosProduto)){
	$resultadoLinha[] = $linha;
}

if (!empty($resultadoLinha)) { 
foreach($resultadoLinha as $key=>$value){
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Gean Marketing</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="box">
		<form action="executa_cliente.php" method="post">
			<fieldset>

				<!-- Form Name -->
				<legend>CADASTRAR USUÁRIO</legend>

				<table>
					<tr>
						<th>Vendedor</th>
						<th>Produto</th>
						<th>Modelo</th>
						<th>Quantidade</th>
						<th>Observação</th>
					</tr>

					<tr>
						
						<td>
							<select>
							<?php while($linhaVendedor = msqli_fetch_assoc($resultadosVendedor)): ?>
								<option><?= $linhaVendedor["nome"] ?> </option>
							<?php endwhile;?>
							</select>
							
						</td>
						<td><?= $linhaProduto["descricao"] ?></td>
						<td><?= $linhaProduto["modelo"] ?></td>
						<td><?= $linhaProduto["tipo"]==1 ? "Militar" : "Civil" ?></td>
						<td><?= $linhaProduto["login"] ?></td>

					</tr>	

				</table>


				<br/>
				<input type="submit" name="Submit" value="Cadastrar">
				<input type="reset" name="Submit2" value="Limpar">

			</fieldset>


		</form>
	</div>

</body>
</html>

<? /*php while($linhaVendedor = msqli_fetch_assoc($resultadosVendedor)): ?>
								<option><?= $linhaVendedor["nome"] ?> </option>
							<?php endwhile;*/?>
