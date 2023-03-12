<?php

/**
 * explode("/", "20/01/2001") -> transforma uma string em um array
 * implode("-", $arr) -> transforma um array em uma string
 */

 /*======= EXPLODE ======= */
echo "<h1>explode </h1>";

//pega o dia, mes e ano de uma string
$data = "31/02/2023";
echo $data;
echo $frase . "<br>";
$novaData = explode("/", $data);
print_r($novaData);

echo $frase . "<br>" . "<br>";

// Pega cada palavra de uma frase e guarda num array
$frase = "Meu nome não é johny";
echo $frase . "<br>";
$array = explode(" ", $frase);
print_r($array);

/*======= IMPLODE ======= */
echo "<h1> implode </h1>";
$nomes = array("Rodrigo", "Carlos", "Neusa", "Talita");
echo "<br>";
print_r($nomes);
$nome = implode(", ", $nomes);
echo "<br>";
echo $nome;