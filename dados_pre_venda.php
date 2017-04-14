<?php
	session_start();
	session_regenerate_id();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title>Home Page</title>
</head>
<body>

	<br>
	<br>
	<fieldset>
	<legend>Digite o CPF do cliente e a quantidade de produtos: </legend>
		<form action = "cadastrar_venda.php" method = "POST" name = "form_cadastro_venda">
			<div>
				<label " for="cpf">CPF / CNPJ</label>  
				<div>
					<input id="Cpf" name="cpf" value="" type="text" placeholder="Apenas números"  required>
				</div>
			</div>

			<div>
				<label " for="qtdProdutos">Quantiidade de produtos</label>  
				<div>
					<input id="qtdProdutos" name="qtdProdutos" value="" type="text"  required>
				</div>
			</div>

			<br/>
				<input type="submit" name="Submit" value="Enviar">
				<input type="reset" name="Submit2" value="Limpar">

		</form>
	</fieldset>
</body>
</html>