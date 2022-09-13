<?php
$valor = $_GET['id'];
$recebe = file("Dados\ $valor");
$title = trim($valor , ".txt");


for ($i=0; $i < count($recebe); $i++) { 
    echo $recebe[$i];
}
?>