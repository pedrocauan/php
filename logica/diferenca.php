<?php 
$valores = array(0,0,0,0);
for($i = 0; $i < count($valores); $i++) {
    $valores[$i] = (int) fgets(STDIN);
}
$diferenca = $valores[0] * $valores[1] - $valores[2] * $valores[3];

echo "DIFERENCA = " .  $diferenca . "\n";
?>