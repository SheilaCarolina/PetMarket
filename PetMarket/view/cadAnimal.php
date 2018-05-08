<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<form method = "post" enctype = "multipart/form-data" action = "log.php">
			<table id = "estilo">
				<tr>
					<th>Nome do animal</th>
					<th><input type = "text"  class = "texto" name = "nome"></th>
				</tr>
				<tr>
					<th>Espécie do animal</th>
					<th><input type = "text"  class = "texto" name = "especie"></th>
				</tr>
				<tr>
					<th>Peso do animal</th>
					<th><input type = "text" class = "texto" name = "peso"></th>
				</tr>
				<tr>
					<th>Altura do animal</th>
					<th><input type = "text" class = "texto" name = "altura"><br></th>
				</tr>
				<tr>
					<th>Alimentação do animal</th>
					<th><input type = "text" class = "texto" name = "alimentacao"><br></th>
				</tr>
				<tr>
					<th><input type = "file" name = "arquivo" class="buttonOne"></th>
					<th><button type = "submit" class="buttonOne">Enviar</button></th>
				</tr>
				<tr>
					<th><a href = "lerLog.php" id = "estilo">Ler log de envios</a></th>
				</tr>
			</table>	
		</form>
	</body>
</html>
