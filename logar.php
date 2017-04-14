<?php

	require_once "conectar_bd.php";

	$dados = array("danilo"=>"123456", "edilson"=>"123", "maria"=>"abc");

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		$login = $_POST['login'];
		$senha = $_POST['senha'];

		$sqlConsulta = "SELECT * FROM adminstradores WHERE login = '$login' AND senha = '$senha' ";


		$resultado = mysqli_query($conexao,$sqlConsulta);
/*
		foreach ($dados as $key => $value) {
			if ($key == $login && $value == $senha)	{
				session_start();
				$_SESSION['login'] = $login;
				$_SESSION['senha'] = $senha;
				header("Location: home.php");
				exit;
			}				
			
		}
		

*/
		if(mysqli_num_rows($resultado) == 1){

			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			header("Location: home.php");
			exit;
		}

		echo "Login e Senha incorretos!";
		echo "<a href='tela_login.php'>Logar denovo</a> ";
		exit;	

	} else {		
		echo "Não é permitido fazer login via método GET!";
		exit;
	}

	// session_start();
	// session_regenerate_id();

	// $_SESSION['nome']  = "Danilo";
	// $_SESSION['email'] = "danilofla@gmail.com";

	// echo "<pre>"; print_r($_SESSION);
	// echo "<pre>"; print_r(session_id());	

	//session_destroy();

?>