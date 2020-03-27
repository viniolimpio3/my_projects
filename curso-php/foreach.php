<?php
$arrey_keys = [
	1 => "Uva",
	2 => "Maçã",
	3 => "Banana",
	4 => "Abacaxi",
	5 => "Fruta"

];

$arrNotas = [
	"aluno1" =>[
		"nome" => "Vinícius",
		"nota" => 10
	],
	"aluno2" =>[
		"nome" => "Mariana",
		"nota" =>9
	],
	"aluno3" =>[
		"nome" => "João",
		"nota" =>7
	]

];

foreach ($arrNotas as $aluno) {
	foreach ($aluno as $chaves => $value) {
		echo "{$chaves} = {$value} <br>";
		
	}
	echo "</br>";
}


foreach ($arrey_keys as $key => $v) {
 	echo "Key : {$key} value : {$v} <br>";
 	
 }


?>