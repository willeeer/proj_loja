<?php
	session_start();
	session_regenerate_id();

?>
<!--
<td height="10"><div align="center">
	<?php
	if (isset($_GET['Message']) ){
		$msg = $_GET['Message'];
		echo "<script>alert('$msg');</script>";
	}
	?>
</div>
</td>
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<title>Home Page</title>
</head>
<body>
	<CENTER><h1><?php echo "Olá ". $_SESSION['login'] .", seja bem vindo!"?></h1></CENTER>
	<br>
	<br>
	<div align = "center">
		<div class="dropdown">
			<button class="dropbtn">Cliente</button>
			<div class="dropdown-content">
				<a href="cadastrar_cliente.php">Cadastrar cliente</a>
				<a href="#">Atualizar cliente</a>
				<a href="alterar_endereco.php">Atualizar endereço de cliente</a>
				<a href="deletar_cliente.php">Listar clientes</a>
			</div>
		</div>
		<div class = "dropdown">
			<button class="dropbtn">Produto</button>
			<div class="dropdown-content">
				<a href="cadastrar_produto.php">Cadastrar Produto</a>
				<a href="alterar_produto.php">Atualizar Produto</a>
				<a href="#">Listar Produtos</a>
			</div>
		</div>
		<div class = "dropdown">
			<button class="dropbtn">Vendedor</button>
			<div class="dropdown-content">
				<a href="cadastrar_vendedor.php">Cadastrar Vendedor</a>
				<a href="#">Listar Vendedores</a>
			</div>
		</div>
		<div class = "dropdown">
			<button class="dropbtn">Vendas</button>
			<div class="dropdown-content">
				<a href="dados_pre_venda.php">Cadastrar Venda</a>
				<a href="#">Atualizar Vendas</a>
				<a href="#">Listar Todas as vendas</a>
				<a href="dados_pre_minhaVenda.php">Minhas vendas</a>
			</div>
		</div>
	</div>
</body>
</html>

		
<!--

<fieldset>
		<legend> Cadastramentos: </legend>
		<form action = "cadastrar_cliente.php" method = "POST" name = "form_cadastro_cliente">
			<label for = "Cadastro_cliente">
				<span>Cliente    </span>
				<input type = "submit" value = "Selecionar">
			</label>
		</form>
		<form action ="cadastrar_produto.php" method = "POST" name = "form_cadastro_produto">
			<label for = "Cadastro_fornecedor">
				<span>Produto </span>
				<input type = "submit" value = "Selecionar">
				
			</label>
		</form>

		<form action ="cadastrar_vendedor.php" method = "POST" name = "form_cadastro_vendedor">
			<label for = "Cadastro_fornecedor">
				<span>Vendedor </span>
				<input type = "submit" value = "Selecionar">
				
			</label>
		</form>

		<form action ="dados_pre_venda.php" method = "POST" name = "form_cadastro_venda">
			<label for = "Cadastro_fornecedor">
				<span>Venda </span>
				<input type = "submit" value = "Selecionar">
				
			</label>
		</form>

		<form action ="alterar_endereco.php" method = "POST" name = "form_cadastro_venda">
			<label for = "Cadastro_fornecedor">
				<span>Alterar endereço de cliente </span>
				<input type = "submit" value = "Selecionar">				
			</label>
		</form>

		<form action ="alterar_produto.php" method = "POST" name = "form_cadastro_venda">
			<label for = "Cadastro_fornecedor">
				<span>Alterar dados de produto </span>
				<input type = "submit" value = "Selecionar">				
			</label>
		</form>
	</fieldset>

-->