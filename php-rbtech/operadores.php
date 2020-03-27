<?php 
	//OPERADORES.
	/*Um operador nada mais é que um transformador, ou seja, você fornece um valor, e ele transforma em outro valor.*/


	$valor1 = 10;
	$valor2 = "10";

	var_dump ($valor1 == $valor2); echo '<br>';
	var_dump ($valor1 === $valor2); echo '<br>';



	// OPERADOR TERNÁRIO
	// (expressão) ? (Valor verdadeiro) : (valor falso)

	($valor1 === $valor2) ? $resultado = true : $resultado = false;

	echo '$resultado = ';  var_dump($resultado); echo "<br>";

	$v1 = 10;
	$v2 = $v1++;        /*nesse caso $v2 vale 10, pois no momento que é dito que $v1 = $v2, $v1 vale 10, logo após é feito a incrementação. Se $v2 = ++$v1, $v2 = 11. */

	echo $v1 . " - " . $v2; echo "<br>";


	//operadores lógicos (e, ou, not)

	$a = true;
	$b = false;

	var_dump($a && $b); echo '<br>';   // se $a E $b forem true, exibe true. Senão exibe false 



	var_dump($a || $b); echo '<br>';  // se $a OU $b forem true, exibe true. Senão exibe false


	var_dump(!$a);   //inverte o estado da variável.

?>  