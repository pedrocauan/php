<h1>If else</h1>
<?php 
    /**
     * condicionais
     * if
     * else
     * elseif
     */
    //sintax
    $numero = 50;
    if($numero == 10):
        echo "é igual a 10";
    elseif($numero <= 9):
        echo "É menor ou igual a 9";
    else:
        echo "É diferente de 10";
    endif;

    //operador ternario
    echo "<hr>";
    $media = 7;
    echo $media >= 7 ? "Aprovado" : "Reprovado";
    
?>