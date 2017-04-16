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
	<legend>Digite o CPF do cliente: </legend>
		<form action = "executa_deletar_cliente.php" method = "POST" >
			<div>
				<label " for="cpf">CPF / CNPJ</label>  
				<div>
					<input id="Cpf" name="cpf" value="" type="text" placeholder="Apenas números"  required>
				</div>
			</div>

			<br/>
				<input type="submit" name="Submit" value="Enviar">
				<input type="reset" name="Submit2" value="Limpar">
		</form>
	</fieldset>
</body>
</html>