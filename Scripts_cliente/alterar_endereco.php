

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
		<form action="executa_altera_endereco.php" method="post">
			<fieldset>

				<!-- Form Name -->
				<legend>Alteração de endereço</legend>

				<div>
					<div class="alert alert-success"><?= @$_GET["msg"]; ?></div>
				</div>

				<!-- Text input-->
				<div>
					<label for="Cpf">Digite o cpf do cliente</label>  
					<div>
						<input id="Cpf" name="cpf" require value="" type="text" size= "60" placeholder="Nome completo"  required="">
					</div>
				</div>

				<div>
					<label for="Cep">CEP</label>  
					<div>
						<input id="Cep" name="cep" require value="" type="text" required>
					</div>
				</div>


				<div>
					<label for="Nomerua">Endereço</label>  
					<div>
						<input id="Nomerua" name="nomerua" require value="" type="text" size= "60" placeholder="Nome da rua/avenida"  required="">
					</div>
				</div>

				<div>
					<label for="Numero">Numero</label>  
					<div>
						<input id="Numero" name="numero" require value="" type="text" required>
					</div>
				</div>

				<div>
					<label for="Uf">UF</label>  
					<div>
						<select id="Uf" name="uf" required="">
							<option>AC</option>	 
							<option>AL</option>	 
							<option>AP</option>	 
							<option>AM</option>	 
							<option>BA</option>
							<option>CE</option>	 
							<option>DF</option>	 
							<option>ES</option>	 
							<option>GO</option>	 
							<option>MA</option>	 
							<option>MT</option>	 
							<option>MS</option>	 
							<option>MG</option>	 
							<option>PA</option>	 
							<option>PB</option>	 
							<option>PR</option>	 
							<option>PE</option>	 
							<option>PI</option>	 
							<option>RJ</option>	 
							<option>RN</option>	 
							<option>RS</option>	 
							<option>RO</option>	 
							<option>RR</option>	 
							<option>SC</option>	 
							<option>SP</option>	 
							<option>SE</option>	 
							<option>TO</option>
						</select>
					</div>
				</div>

				<div>
					<label for="Cidade">Cidade</label>  
					<div>
						<input id="Cidade" name="cidade" require value="" type="text" required>
					</div>
				</div>

				<div>
					<label for="Bairro">Bairro</label>  
					<div>
						<input id="Bairro" name="bairro" require value="" type="text" required>
					</div>
				</div>

				<div>
					<label for="Complemento">Complemento</label>  
					<div>
						<input id="Complemento" name="complemento" require value="" type="text" required>
					</div>
				</div>

				<div>
					<label for="Fonecasa">DDD/Telefone Residencial</label>  
					<div>
						<input id="Fonecasa" name="fonecasa" require value="" type="text" required>
					</div>
				</div>

				<div>
					<label for="Fonecel">DDD/Telefone Celular</label>  
					<div>
						<input id="Fonecel" name="fonecel" require value="" type="text" required>
					</div>
				</div>

				<br/>


		
				<br/>
				<input type="submit" name="Submit" value="Cadastrar">
				<input type="reset" name="Submit2" value="Limpar">

			</fieldset>


		</form>
	</div>

</body>
</html>