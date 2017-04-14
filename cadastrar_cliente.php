

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

				<div>
					<div class="alert alert-success"><?= @$_GET["msg"]; ?></div>
				</div>

				<!-- Text input-->
				<div>
					<label for="Nome">Nome/ Razão Social</label>  
					<div>
						<input id="Nome" name="nome" require value="" type="text" size= "60" placeholder="Nome completo"  required>
					</div>
				</div>

				<div>
					<label for="sexo">Sexo </label>
						<input type="radio" name="sexo" value="M" checked="checked" required>
						M
					</label>
					<label class="radio" >
						<input type="radio" name="sexo" value="F" required>
						F
					</label>
				</div>

				<!-- Text input-->
				<div>
					<label " for="cpf">CPF / CNPJ</label>  
					<div>
						<input id="Cpf" name="cpf" value="" type="text" placeholder="Apenas números"  required>
					</div>
				</div>

				<!-- Text input-->
				<div>
					<label for="Identidade">RG / Inscrição Estadual</label>  
					<div>
						<input id="Identidade" name="identidade" type="text" placeholder="" required>
					</div>
				</div>


				<div>
					<label for="nasc">Data de Nascimento</label>  
					<div>
						<input id="nasc" type="date" name="bday">
					</div>
				</div>

				<div>
					<label for="Email">Email</label>  
					<div>
						<input id="mail" name="email" require value="" type="email" required>
					</div>
				</div>

				<br/>

				<legend>Endereço Residencial</legend>

				<br/>

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
					<label for="Uf_end">UF</label>  
					<div>
						<select id="Uf_end" name="uf_end" require value="" type="text" required>
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