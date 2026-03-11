<?php 
	$ano = 2020; //variável local no script

	function exibir(){
		GLOBAL $ano; //variável GLOBAL através de cast
		$ano++;
		return $ano;
	}

	echo "</br> Ano: " . $ano;
	echo "</br> Ano: " . exibir();
	echo "</br> Ano: " . exibir();
	echo "</br> Ano: " . $ano;
?>