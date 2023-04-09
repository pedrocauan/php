<?php 

//Constante PI
define("__PI__", 3.14159);

//ENTRADA
$raio = (float) fgets(STDIN);
$area = __PI__ * pow($raio, 2);

printf("A=" . round($area, 4) . "\n");

?>