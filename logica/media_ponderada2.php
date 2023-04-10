<?php 
$notas = [0, 0, 0];

for($i = 0; $i < count($notas); $i++){
    $notas[$i] = (float) fgets(STDIN);
}

$media = ($notas[0] * 2 + $notas[1] * 3 + $notas[2] * 5) / 10;

echo "MEDIA = " . number_format($media, 1) . "\n";
?>