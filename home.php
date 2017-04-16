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
				<a href="Scripts_cliente/cadastrar_cliente.php">Cadastrar cliente</a>
				<a href="#">Atualizar cliente</a>
				<a href="Scripts_cliente/alterar_endereco.php">Atualizar endereço de cliente</a>
				<a href="home.php">Listar clientes</a>
			</div>
		</div>
		<div class = "dropdown">
			<button class="dropbtn">Produto</button>
			<div class="dropdown-content">
				<a href="Scripts_produto/cadastrar_produto.php">Cadastrar Produto</a>
				<a href="Scripts_produto/alterar_produto.php">Atualizar Produto</a>
				<a href="#">Listar Produtos</a>
			</div>
		</div>
		<div class = "dropdown">
			<button class="dropbtn">Vendedor</button>
			<div class="dropdown-content">
				<a href="Scripts_vendedor/cadastrar_vendedor.php">Cadastrar Vendedor</a>
				<a href="#">Listar Vendedores</a>
			</div>
		</div>
		<div class = "dropdown">
			<button class="dropbtn">Vendas</button>
			<div class="dropdown-content">
				<a href="Scripts_venda/dados_pre_venda.php">Cadastrar Venda</a>
				<a href="#">Atualizar Vendas</a>
				<a href="#">Listar Todas as vendas</a>
				<a href="Scripts_venda/dados_pre_minhaVenda.php">Minhas vendas</a>
			</div>
		</div>
	</div>
</body>
</html>