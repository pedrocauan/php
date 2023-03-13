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