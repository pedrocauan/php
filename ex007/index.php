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

    echo "<hr>";
    //Arrays associativos (qnd as chaves são strings )
    $pessoa = array("nome" => "pedro", "idade" => 22, "altura" => 1.73);
    $pessoa["cidade"] = "São José do Rio Preto";

    foreach($pessoa as $index => $value) {
        echo $index .": ".  $value  . "<br>";
    }

    //Arrays multidimencionais
    $times = array(
        "cariocas" => array("campeao" => "vasco","vice" => "flamengo","terceiro" => "botafogo"),
        "paulistas" => array("campeao" =>"São Paulo","vice" => "Corinthains","terceiro" => "Palmeiras"),
        "bahianos" => array("campeao" => "Bahia", "vice" => "Vitoria", "terceiro" => "Sport")
    );
    echo "<hr>";

    echo "<br>";
    // percorrendo cada um dos arrays multidimencionais
    echo "Cariocas <br>";
    foreach($times["cariocas"] as $index => $value) {
        echo $index . ": " . $value . "<br>";
    }
    echo "<br>";

    echo "Paulistas <br>";
    foreach($times["paulistas"] as $index => $value) {
        echo $index . ": " . $value . "<br>";
    }
    echo "<br>";

    echo "Bahianos <br>";
    foreach($times["bahianos"] as $index => $value) {
        echo $index . ": " . $value . "<br>";
    }
?>