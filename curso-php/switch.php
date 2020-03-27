<?php
	$estacao = "Outono";
	$msg = "";

	switch($estacao){
		case "Verão" :
			$msg = "Passe protetor solar!";
			break;
		case "Outono" :
			$msg = "Veja as folhas caindo!";
			break;
		case 'Inverno':
			$msg = "Não esqueça o agasalho.";
			break;	
	}

?>
<!-- Doctype Html. -->
<html>
	<head>
		<meta charset="utf-8">
		<title>Switch.php</title>
	</head>
	<body>
		<p>Lá vai uma dica para você passar o <?= $estacao; ?> : <br> <span style="color :blue"><?= $msg; ?></span></p>
	</body>
</html>