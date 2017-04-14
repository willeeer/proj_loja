<?php
	session_start();
	session_regenerate_id();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	
	<fieldset>
		<legend>Logar no sistema</legend>

		<form action="logar.php" method="post" name="form_login">
			<label for="login">
				<span>Login:</span>
				<input type="text" name="login" required />
			</label>

			<label for="senha">
				<span>Senha:</span>
				<input type="password" name="senha" required />
			</label>

			<input type="submit" value="logar" />
		</form>

	</fieldset>

</body>
</html>