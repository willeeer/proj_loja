<?php

require_once "../conectar_bd.php";
session_start();
session_regenerate_id();

if (!$conexao) {
	header("Location: ../home.php","fudeu");
	session_destroy();
}

$consultaProduto = "SELECT * FROM produto";
$resultadosProduto = mysqli_query($conexao,$consultaProduto);

$consultaVendedor = "SELECT * FROM vendedor";
$resultadosVendedor = mysqli_query($conexao,$consultaVendedor);

$cpf = $_POST['cpf'];
$qtd = $_POST['qtdProdutos'];

$_SESSION['cpf'] = $cpf;
$_SESSION['qtdProdutos'] = $qtd;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<style>
table {
    border-collapse: collapse;
}
td {
    border: 1px solid #999;
    padding:3px 10px;
}
td select {
    border: none;
}
</style>
	<meta charset="UTF-8">
	<title>Gean Marketing</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="box">
		<form action="executa_venda.php" method="post">

				<table>
					<tr>
						<th>Vendedor </th>
						<th>Produto </th>
						<th>Modelo </th>
						<th>Data da venda </th>
						<th>Observação </th>
					</tr>


					<?php $i=0; while($i < $qtd){ ?>

					<tr>
						<td id ="ISINcb" class="lblCell_R" align="center">
						<?php echo "<select id='isinz' name = 'vendedor".$i."'  type = 'text' width='144' style='height:19px; width:140px; text-align:center;'>" ?>
							<?php  while ($linhaVendedor = mysqli_fetch_assoc($resultadosVendedor)){
								echo "<option> ". $linhaVendedor["nome"] . "</option>";
							}
							mysqli_data_seek($resultadosVendedor, 0);
							?>
							</select>
						</td>
						<td>
						<?php echo "<select id='isinz' name = 'descricao".$i."' type = 'text' width='144' style='height:19px; width:140px; text-align:center;'>" ?>
							<?php  while ($linhaProduto = mysqli_fetch_assoc($resultadosProduto)){
								echo "<option> ". $linhaProduto["descricao"] . "</option>";
							}
							mysqli_data_seek($resultadosProduto, 0);
							?>
							</select>
						</td>
						<td>
						<?php echo "<select id='isinz' name = 'modelo".$i."' type = 'text' width='144' style='height:19px; width:140px; text-align:center;'>" ?>
							<?php  while ($linhaProduto = mysqli_fetch_assoc($resultadosProduto)){
								echo "<option> ". $linhaProduto["modelo"] . "</option>";
							}
							mysqli_data_seek($resultadosProduto, 0);
							?>
							</select>	
						</td>
						<td> <?php echo "<input id='nasc' type='date' name='bday".$i."'>" ?></td>
						<td> <?php echo "<textarea name='observacao".$i."' cols='40' rows='5'></textarea> " ?></td>
					</tr>

					<?php $i++;}?>
				</table>


				<br/>
				<input type="submit" name="Submit" value="Enviar">
				<input type="reset" name="Submit2" value="Limpar">

		</form>
	</div>

</body>
</html>

