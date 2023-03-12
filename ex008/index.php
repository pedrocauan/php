<?php 
    /**
     * is_array() -> ve se é um array
     * in_array() -> ve se o valor existe no array
     * array_keys($array) -> retorna um novo array com as chaves do array passado
     * array_values($array) -> retorna um novo array com os valores do array pasado
     * array_merge($array1, $array2) -> junta dois ou mais arrays
     * array_pop() -> exclui a ultima posição do array
     * array_shift() -> excluia primeira posição do array
     * array_unshift($array, $elemento) -> insere um ou mais elementos no inicio do array
     * array_push($array, $elemento) -> insere um ou mais elementos no final do array
     */
    $nomes = array("primo" => "Rodrigo", "vizinho" => "Felipe", "mae" => "Maria", "pai" => "José");

    /* array_push */
    // $frutas = array("Uva", "Laranja", "Maçã");
    // print_r($frutas);
    // array_push($frutas, "Manga", "Acerola", "Morango");
    // echo "<br>";
    // print_r($frutas);


    /* array_unshift */
    // $frutas = array("Uva", "Laranja", "Maçã");
    // print_r($frutas);
    // array_unshift($frutas, "Manga", "Acerola", "Morango");
    // echo "<br>";
    // print_r($frutas);

    /* array_shift */
    // $carros = array("camaro", "uno", "gol");
    // print_r($carros);
    // echo "<br>";
    // echo array_shift($carros);
    // echo "<br>";
    // print_r($carros);

    /* array_pop */
    // $carros = array("camaro", "uno", "gol");
    // print_r($carros);
    // echo "<br>";
    // echo array_pop($carros);
    // echo "<br>";
    // print_r($carros);

    /* array_merge */
    // $carros = array("camaro", "uno", "gol");
    // $motos = array("pop100", "500cc", "cb1000");
    // $veiculos = array_merge($carros, $motos);
    // print_r($veiculos);

    /* array_values */
    // $values = array_values($nomes);
    // print_r($values);

    /* array_keys */
    // $keys = array_keys($nomes);
    // print_r($keys);

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