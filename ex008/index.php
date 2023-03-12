<?php 
    /**
     * is_array() -> ve se é um array
     * in_array() -> ve se o valor existe no array
     * array_keys($array) -> retorna um novo array com as chaves do array passado
     */
    
    /* array_keys */
    $nomes = array("primo" => "Rodrigo", "vizinho" => "Felipe", "mae" => "Maria", "pai" => "José");
    $keys = array_keys($nomes);
    print_r($keys);

     /* == in_array == */
    // if(in_array("Rodrigo", $nomes)){
    //     echo "Existe no array";
    // }
    // else {
    //     echo "Não existe no array";
    // }

    /* == is_array == */
    // if(is_array($nomes)):
    //     echo "é um array";
    // else:
    //     echo "Não é um array";
    // endif;

?>