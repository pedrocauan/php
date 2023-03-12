<h1>Operadores relacionais</h1>
<?php
/**
 * == | igual
 * != | nao igual
 * === |igual e mesmo tipo
 * !== |nao igual e mesmo tipo
 * <> | diferente
 * < | menor
 * > | maior
 * <= | menor que
 * >= |maior que
 * <=> (spacheship) | se for menor retorna -1, se for igual retorna 0, se dor maior retorna 0 
 */

if (10 < 11) :
    echo "Positivo";
else :
    echo "Negativo";
endif;

?>

<h2>spacheship operator</h2>
<?php
$saldo_cartao = -16;
// -1 = em divida | 0 = sem saldo | 1 = saldo positivo
var_dump((float) $saldo_cartao <=> 0);

?>

<br>
<br>
<button><a href="../" style="display: block; text-decoration:none; color: black; font-size: 25px; width:100%;">voltar</a></button>