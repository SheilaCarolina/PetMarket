<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type = "text/css" href="resources/CSS/Belezas.css">
	</head>
	<body>
		<form method = "post" enctype = "multipart/form-data" action = "../model/dao/cadastroA.php">
			<table id = "estilo">
				<tr>
					<th>Nome do animal</th>
					<th><input type = "text"  class = "texto" name = "nome"></th>
				</tr>
				<tr>
					<th>Raça do animal</th>
					<th><input type = "text"  class = "texto" name = "raca"></th>
				</tr>
				<tr>
					<th>Porte do animal</th>
					<th><input type = "text"  class = "texto" name = "porte"></th>
				</tr>
				<tr>
					<th>Data de nascimento</th>
					<th><input type = "text" class = "texto" name = "nasc"></th>
				</tr>
				<tr>
					<th>Sexo do animal</th>
					<th><input type = "text" class = "texto" name = "sexo"><br></th>
				</tr>
				<tr>
					<th>Motivo de doação</th>
					<th><input type = "text" class = "texto" name = "motDoacao"><br></th>
				</tr>
				<tr>
					<th>Dados médicos do animal</th>
					<th><input type = "text"  class = "texto" name = "dadosMed"></th>
				</tr>
				<tr>
					<th>Situação do animal</th>
					<th><input type = "text"  class = "texto" name = "situacao"></th>
				</tr>
				<tr>
					<th><input type = "file" name = "arquivo" class="buttonOne"></th>
					<th><button type = "submit" class="buttonOne">Enviar</button></th>
				</tr>
			</table>	
		</form>
	</body>
</html>
