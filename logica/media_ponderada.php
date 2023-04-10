<?php 
$a = (float) fgets(STDIN);
$b = (float) fgets(STDIN);

$media = ($a * 3.5 + $b * 7.5) / 11;
$media = number_format($media, 5);
echo "MEDIA = " . $media . "\n";

?>