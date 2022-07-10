<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Teste</title>
	</head>
	<body>
		<?php
		require("header2.php");
		?>

		<form action="result.php" method="POST">

			<label>
				Peso (em kg):
				<input type="text" name="weight">
			</label>
			<br>
			<br>

			<label>
				Altura (em cm):
				<input type="text" name="height">
			</label>
			<br>
			<br>

			<input type="submit" value="Enviar">

		</form>
	</body>
</html>
