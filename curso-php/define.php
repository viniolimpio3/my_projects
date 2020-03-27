<?php 
	define("min" , 18 ); //define("nome_da_constante" , valor da constante);
	define("max", 60 );//define(name, value);
	$idade = 0;
	// -----------------------------------------------------

	echo "Idade Mínima para entrar : " . min . "<br/>"; 
	echo "Idade Máxima para entrar : " . max . "<br/>"; 
	echo "Sua idade é : " . $idade . "<br/>";
	// -----------------------------------------------------

	if ($idade >=  min  && $idade <=  max ) {
		echo "Você está dentro da idade permitida!";		
	}else{
		echo "<br/> Cai fora! você está fora da idade permitida!!";
	}
 ?>