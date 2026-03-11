<?php 
	$data="20 de agosto de 2020";	//string
	$salario=850.00;				//float or double
	$cargo="Estagiário";			//string
	$idade=18;						//integer ou int
	$resultado=true; 				//boolean

	if($resultado){
		echo "Verdadeiro";
		print("<br/> Data: $data <br/> Salário: $salario <br/> Cargo: $cargo <br/> Idade: $idade <br/><br/><br/><br/>");
	}

	
	//atv2 same variaveis

	echo "Arquivo criado $data </br>";
	printf("Salário mínimo: R$ %.2f por mês </br>", $salario);

	$texto = sprintf("%s recebe R$ %.2f por mês", $cargo, $salario*2);

	echo $texto;
	sprintf("%s recebe R$ %.2f por mês", $cargo, $salario*2);

?>
