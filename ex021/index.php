<?php 

//global

$name = "Pedro";
$age = 23;
function person()
{
    // escopo local
    // global $name; /* acessa a variavel global name  */
    // echo $name
    echo $GLOBALS["age"]; /*$GLOBALS acessa todas as variaveis globais*/
}

person();
?>

<br>
<br>
<button><a href="../" style="display: block; text-decoration:none; color: black; font-size: 25px; width:100%;">voltar</a></button>