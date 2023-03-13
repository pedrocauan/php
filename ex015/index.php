<h1>Do while e while</h1>
<?php 

$i = 1;
while($i <= 10):
    echo "contador e $i <br>";
    $i++;
endwhile;
echo "<br>";
echo "final $i";
echo "<br>";

$i = 1;
//executa o trecho de codigo dps faz a verificação
do {
    echo "contador é $i <br>";
    $i++;
}while($i <= 10);

?>

<br>
<br>
<button><a href="../" style="display: block; text-decoration:none; color: black; font-size: 25px; width:100%;">voltar</a></button>