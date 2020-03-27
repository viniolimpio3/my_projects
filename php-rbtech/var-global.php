<?php 
	//Lembrando que não é possível puxar uma variável de escopo local, ou seja, de uma função, para o escopo global.
	//Só é possível pegar uma variável global, e colocá-la em escopo local.

	$num = 50;  //Var Global


	function num(){
		global $num;   // Se esta linha de código não existisse, a chamada da função daria errado.
		echo $num;
	};



	num();





 ?>