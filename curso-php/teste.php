<?php 
	echo "Olá, Mundo! <hr/>" ;
	$soma = 5 + 2 ;
	$subtracao = 5 - 2;
	$multiplicacao = 5 * 2;
	$divisao = 5 / 2;
 ?> 
 <!-- Doctype HTML -->
 <html lang="pt-br">
 	<head>
 		<meta charset="UTF-8">
 	</head>
 	<body>
 		<p>2 + 5 = <?=$soma?></p>
 		<p>2 - 5 = <?=$subtracao?></p>
 		<p>2 * 5 = <?=$multiplicacao?></p>
 		<p>2 / 5 = <?=$divisao?></p>
 		
 		<hr/>
 		<p><?=($soma * $multiplicacao)?></p>
		
 	</body>
 </html>