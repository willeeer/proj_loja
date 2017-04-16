

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
		<form action="executa_vendedor.php" method="post">
			<fieldset>

				<!-- Form Name -->
				<legend>CADASTRAR USUÁRIO</legend>

				<div>
					<div class="alert alert-success"><?= @$_GET["msg"]; ?></div>
				</div>

				<!-- Text input-->
				<div>
					<label for="Nome">Nome</label>  
					<div>
						<input id="Nome" name="nome" require value="" type="text" size= "60" placeholder="Nome completo"  required="">
					</div>
				</div>

				<!-- Text input-->
				<div>
					<label " for="cpf">CPF</label>  
					<div>
						<input id="Cpf" name="cpf" require value="" type="text" placeholder="Apenas números"  required="">
					</div>
				</div>

		

				<br/>
				<input type="submit" name="Submit" value="Cadastrar">
				<input type="reset" name="Submit2" value="Limpar">

			</fieldset>


		</form>
	</div>

</body>
</html>