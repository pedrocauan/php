<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Classe</title>
</head>

<body>
    <h1>Primeira Classe</h1>
    <?php
    class Cliente
    {
        //atributos
        public $nome = "anonimo";
        public $idade = 18;

        public function apresentar()
        {
            echo "nome: {$this -> nome} <br> idade : {$this -> idade} ";
        }
    }

    $c1 = new Cliente();
    $c1 ->nome = "Pedroca";
    $c1 -> idade = 22;
    $c1 -> apresentar();

    $c2 = new Cliente();
    $c2 -> nome = "Joao";
    $c2 -> idade = 23;

    $c2 -> apresentar();
    ?>

</body>

</html>