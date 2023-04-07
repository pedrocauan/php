<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Data</title>
</head>
<body>
    
    <h1>classe data</h1>
    <?php 
        class Data
        {
            public $dia;
            public $mes;
            public $ano;

            public function __construct($dia = 01, $mes = 01, $ano = 1970)
            {   
               $this -> dia = $dia;
               $this -> mes = $mes;
               $this -> ano = $ano;
            }

            public function apresentar() {
                return "hoje é dia {$this -> dia}/{$this -> mes}/{$this -> ano}<br>";
            }
        }

        $data = new Data();
        $data -> dia = 4;
        $data -> mes = 12;
        $data -> ano = 2023;
        echo $data -> apresentar();

        $aniversario = new Data(23,06,2000);
        echo $aniversario -> apresentar();
    ?>
    
</body>
</html>