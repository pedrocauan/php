<?php 


// $person = function(){
//     return "blablabla";
// };

// var_dump($person());


$teste = function($name){

    // passagem de parametro por referencia exige a palavra chave use
    $person = function() use($name){
        return $name;
    };

    return $person;
};

var_dump($teste("PEdro")());


//objetos do tipo closures precisam ter abertura e fechamento pois são funções
// class Person {
//     public function __invoke()
//     {
//         return "tete";
//     }
// }

// $person = new Person;
// var_dump($person());  


?>

<br>
<br>
<button><a href="../" style="display: block; text-decoration:none; color: black; font-size: 25px; width:100%;">voltar</a></button>