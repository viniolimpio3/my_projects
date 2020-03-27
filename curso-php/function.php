<?php
	
	function conta($p1, $p2){
		return(($p1 * $p2)/4);
	}
?>
<!-- Doctype Html -->
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		
		<ul>
			<?php
			for ($i=0; $i <10 ; $i++) { 
			?>
				<li><?= conta($i, ($i + 6))?></li>

			<?php	
			}
			?>
			
		</ul>

	</body>
</html>