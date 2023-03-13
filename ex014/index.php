<h1>operadores logicos</h1>
<?php 
/**
 * &&  - and
 * || - or
 * xor
 * ! - megação
 * 
 */

 $idade = 26;
 $nome = "oliveira";

 //ve se a idade nao é 25 e o nome nao é oliveira
 if(!($idade == 25)  and !($nome == "pedro")):
    echo "É verdadeiro";
 else:
    echo "é falso";
 endif;


?>

<br>
<br>
<button><a href="../" style="display: block; text-decoration:none; color: black; font-size: 25px; width:100%;">voltar</a></button>