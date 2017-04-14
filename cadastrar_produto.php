<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Page</title>
</head>
<body>
	<div>
		<form action="executa_produto.php" method="post">
			<fieldset>
				<legend>Cadastro de produto</legend>

				<div>
					<label for="Codigo">Modelo</label>  
					<div>
						<input id="Codigo" name="codigo" require value="" type="text"  required="">
					</div>
				</div>

				<div>
					<label for="Nome">Descrição/nome</label>  
					<div>
						<input id="Nome" name="nome" require value="" type="text" size= "60" required="">
					</div>
				</div>

				<div>
					<label for="Preco">Preço</label>  
					<div>
						<input id="Preco" name="preco" require value="" type="number" required="">
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