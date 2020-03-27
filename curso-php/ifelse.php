<?php
	$idade = 17;
	$acesso = true;
	$senha	= 1234;
?>
<!-- Doctype Html -->
<html>
	<head>
		<meta charset="utf-8">
		<title>Aula if && else</title>
	</head>
	<body>
		<?php
			if($idade > 18 && ($acesso || $senha !=1234)){
				?>
				<h1 style="color:blue">Acesso liberado!! Divirta-se.</h1>
				<?php
			}else if($idade < 18){
				?>
				<h1 style="color:red">ACESSO NEGADO PELO FATO DE VOCÊ SER MUITO NOVO.</h1>
				<?php
			}
		?>
	</body>
</html>