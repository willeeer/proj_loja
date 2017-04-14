

<?php 

require_once "conectar_bd.php";
session_start();
session_regenerate_id();

if (!$conexao) {
	header("Location: home.php","fudeu");
	session_destroy();
}

$cpfCliente = $_POST['cpf'];

$consultaLista = "SELECT C.nome, C.cpf, V.codigo_venda, V.modelo_produto, P.descricao,T.nome as nomeV, DATE_FORMAT( V.data_venda, '%d-%m-%Y') as data, V.observacao FROM cliente C INNER JOIN vendas V ON C.cpf = V.cpf_cliente, produto P, vendedor T WHERE V.cpf_cliente = '$cpfCliente' AND P.modelo = V.modelo_produto AND V.cpf_funcionario = T.cpf ORDER BY V.codigo_venda";
$resultados = mysqli_query($conexao, $consultaLista);

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
	
	<CENTER><legend>Lista de vendas de cliente:  </legend></CENTER>
	<br/	>
	<body>
	<div align = "center">
	<table class="table table-striped" border=3>
		<tr>
			<th>Cliente</th>
			<th>Cpf-Cliente</th>
			<th>Código de venda</th>
			<th>Modelo-Produto</th>
			<th>Nome-Produto</th>
			<th>Vendedor</th>		
			<th>Data de venda</th>		
			<th>Observações</th>		
		</tr>
		<?php  while ($dadosUsuarios = mysqli_fetch_assoc($resultados)): ?>
		<tr>
			<td align = "center"><?= $dadosUsuarios["nome"] ?></td>
			<td align = "center"><?= $dadosUsuarios["cpf"] ?></td>
			<td align = "center"><?= $dadosUsuarios["codigo_venda"] ?></td>
			<td align = "center"><?= $dadosUsuarios["modelo_produto"] ?></td>
			<td align = "center"><?= $dadosUsuarios["descricao"] ?></td>
			<td align = "center"><?= $dadosUsuarios["nomeV"] ?></td>
			<td align = "center"><?= $dadosUsuarios["data"] ?></td>
			<td align = "center"><?= $dadosUsuarios["observacao"] ?></td>
		</tr>	
		<?php endwhile; ?>

	</table>

	<br/>

	<form action = "controle_parcelas.php" method = "POST">
		<div>
			<label " for="cod_venda">Digite o código da venda que deseja listar: </label>  
			<div>
				<input id="cod_venda" name="cod_venda" value="" type="text" required>
			</div>
		</div>

		<br/>
			<input type="submit" name="Submit" value="Enviar">
			<input type="reset" name="Submit2" value="Limpar">
			<input type=button value="Retornar" onclick="window.location.href='home.php';">
	</form>
</body>
</html>