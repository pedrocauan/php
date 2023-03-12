<?php    
    // === PRIMEIRA FORMA ===
    //array() cria arrays
    $carros = array(1 =>"BMW", 2 => "veloster", 3 =>"highlux");

    // print_r($carros); /*print_r mostra arrays */
    $carros[] = "Amarok"; /* adiciona itens no array */
    $carros[10] = "camaro";
    print_r($carros);
    
    echo "<br>";

    // == SEGUNDA FORMA ==
    $motos = array();
    $motos[] = "YAMARRA";
    $motos[] = "RONDA";
    $motos[5] = "SUZUKI";
    print_r($motos);

    echo "<br>";

    // == TERCEIRA FORMA ==
    $clientes = ["Rodrigo", "Felipe", "Bia"];
    print_r($clientes);
    echo "<hr>";

    //count -> exibe a quantidade de itens em um array
    $totalCliente = count($clientes);
    echo $totalCliente;
    echo "<hr>";

    //foreach
    foreach($clientes as $value) {
        echo $value . "<br>";
    } 

?>