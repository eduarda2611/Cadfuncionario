<link rel="stylesheet" href="style.css">
<?php

	extract($_POST); 

	$dado = "ID: $id\r\nNome: $nome\r\nCargo: $cargo\r\nSalário: $salario\r\nDependentes: $depende";

	$arquivo = "$id.txt";

	$refFile = fopen("Dados\ $arquivo", 'w+');
	fwrite($refFile, $dado);
	fclose($refFile);
	
	$file = scandir("Dados");

	for($i = 0; $i < count($file); $i++){
		if($file[$i] == "." || $file[$i] == ".."){
			echo "";
		}else{
			$di = trim($file[$i]);
			echo "<li> <a href='read.php?id=$di'> $file[$i] </a></li>";
		}
	}

	echo "<br> <a href='index.php'><button> Cadastrar Novamente </button></a>";