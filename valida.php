<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php

			$login = $_POST['login'];
			$senha = $_POST['senha'];

			if ($login == 'admin' && $senha == 'admin')
			{
				echo "<h1>Bem-vindo usuário administrador</h1>";
			
		?>
		<form action="calcula.php" method="post">
			Peso<input type="number" name="peso"><br>
			Altura<input type="number" name="altura"><br>
			<button>Calcular</button>
		</form>
			
		<?php
			}
			else
			{
				header("location: login.php?msg=Login Incorreto $login!&login=$login");
			}
		?>
	</body>
</html>
