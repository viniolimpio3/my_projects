<?php 
	// $nomeArray = array("Vinicius", 'Irene', 'Luan', 'Deborah', 'Jessica', "Bernan");
	$nomeArray = ["Vinicius", 'Irene', 'Luan', 'Deborah', 'Jessica', "Bernan"];
	



 ?>
 <!-- doctypeHtml -->
 <html lang="pt-br">
 	<head>
 		<meta charset="utf-8">
 		<title>Teste array</title>
 	</head>
 	<body>

 		<select name="slNomes" id="slNomes">
 			
 			<?php 
 				for($i= 0; $i< count($nomeArray); $i++){

 					?>
 					<option value="<?= $nomeArray [$i]  ?>"><?= $i?></option>
 					<?php

 				}
 			?>

 		</select>
		
		<button onclick="alert(document.getElementById('slNomes').value)">Selecionar</button>


		<br>
		<br>
 		
 	</body>
 </html>

<!-- Array por associação -->

 <?php
 	$arrayNota = array(
 		"aluno1" => 10,
 		"aluno2" => 6,
 		"aluno3" => array(
			"nomeAluno" => "Vinicius",
			"nota1" => 10,
			"nota2" => 7,	
			),
 		);

 	echo $arrayNota	 ["aluno3"]["nomeAluno"] . "</br>";
 	echo $arrayNota ["aluno3"] ["nota1"]

 ?>