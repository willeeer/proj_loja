<?php

require_once "conectar_bd.php";

if (!$conexao) {
	header("Location: home.php","fudeu");
	session_destroy();
}

$consultaProduto = "SELECT * FROM produto";
$resultadosProduto = mysqli_query($conexao,$consultaProduto);


?>

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
				<legend>Alteração de produto</legend>

				<div>
					<label for="Codigo">Modelo</label>  
					<select id='isinz' name = "modelo" type = "text" width="144" style="height:19px; width:140px; text-align:center;">
							<?php  while ($linhaProduto = mysqli_fetch_assoc($resultadosProduto)){
								echo "<option> ". $linhaProduto["modelo"] . "</option>";
							}
							mysqli_data_seek($resultadosProduto, 0);
							?>
					</select>
				</div>

				<div>
					<label for="Nome">Descrição/nome</label>  
					<div>
						<input id="Nome" name="descricao" require value="" type="text" size= "60" required="">
					</div>
				</div>

				<div>
					<label for="Preco">Preço</label>  
					<div>
						<input id="Preco" name="preco" require value="" type="number" required="">
					</div>
				</div>

				<br/>
				<input type="submit" name="Submit" value="Alterar">
				<input type="reset" name="Submit2" value="Limpar">


			</fieldset>	
			
		</form>
		
	</div>
</body>
</html>