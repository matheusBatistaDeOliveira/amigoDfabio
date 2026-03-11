<?php 
	$nome = "Matheus" //variável local no script

	function exiba(){
		$nome = "Maria" //variável local da função
	}

	exiba();

	echo "</br> Valor da variável fora da função: " . $nome;
?>