<h1>continue e break</h1>
<?php 
    /**
     * continue -> vai pra proxima iteração do laço
     * break -> sai do laço de repetição
     * 
     */
    for($i = 0; $i <= 10; $i++){
        if( $i % 2 !== 0){
            continue;
        } else{
            echo "$i <br>";
        }
    }

?>


<br>
<br>
<button><a href="../" style="display: block; text-decoration:none; color: black; font-size: 25px; width:100%;">voltar</a></button>