<?php
	//adicionado pelo usuário
	$nota1 = 10;
	$nota2 = 10;
	$op = 5; //N° alunos

	$media = 0;

	$mediaClasse = 0;
	$alunosReprovados = 0;
	$alunosExame = 0;
	$alunosAprovados = 0;


for($i = 1;$i<=$op;$i++){
		$media = ($nota1 + $nota2)/2;
		$mediaClasse += $media;

		if($media <= 3){
			echo 'Aluno ' .$i. ' Reprovado </br>';
			$alunosReprovados += 1;
		}else if($media <= 7){
			echo 'Aluno ' .$i. ' Exame </br>';
			$alunosExame += 1;
		}else{
			echo 'Aluno ' .$i. ' Aprovado </br>';
			$alunosAprovados += 1;
		};
	};
	echo "Total de alunos aprovados: $alunosAprovados </br>";
	echo "Total de alunos reprovados: $alunosReprovados </br>";
	echo "Total de alunos para Exame: $alunosExame </br>";
	echo 'Media de notas: ' . $mediaClasse = $mediaClasse / $op . ' </br>';
 ?>