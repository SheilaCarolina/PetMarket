<meta charset = "utf-8">
<link rel="stylesheet" type = "text/css" href="log.css">
<body>
<?php
	$foto = $_FILES["arquivo"];
	echo "<div id = 'centro'>";
		echo "Nome do arquivo: ".$foto["name"]."<br>";
		echo "Tamanho do arquivo: ".$foto["size"]." bytes<br>";
		echo "Pasta temporária: ".$foto["tmp_name"]."<br>";
		echo "tipo do arquivo: ".$foto["type"]."<br>";

		if(move_uploaded_file($foto["tmp_name"],"../../view/resources/Images/".$foto["name"])){
			echo "Imagem enviada com sucesso";
			
			$nome = $_POST["nome"];
			$raca = $_POST["raca"];
			$porte = $_POST["porte"];
			$nasc = $_POST["nasc"];
			$sexo = $_POST["sexo"];
			$motDoacao = $_POST["motDoacao"];
			$dadosMed = $_POST["dadosMed"];
			$situacao = $_POST["situacao"];

			$cad = fopen("cad.txt","a");
		
			fwrite($cad,"<tr>
							<td>".$nome."</td>
							<td>".$raca."</td>
							<td>".$porte."</td>
							<td>".$nasc."</td>
							<td>".$sexo."</td>
							<td>".$motDoacao."</td>
							<td>".$dadosMed."</td>
							<td>".$situacao."</td>
							<td><img src='../../view/resourses/".$foto["name"]."' width='150'>"."</td>
						</tr>");
			fclose($cad);
		echo "</div>";
	}
	else
		echo "Imagem NÃO enviada com sucesso";
	
?>
</body>
<form method = "post" enctype = "multipart/form-data" action = "../../view/cadAnimal.php">
	<div id = "botao">
		<input type = "submit" value = "Voltar" class="buttonOne">
	</div>
</form>
