<?php 
// include -> se der erro continua executando
// require -> se der erro ele para de executar

// include_once -> importa só uma vez o arquivo 
// require_once -> se der erro ele para de executar



require_once "./teste.php";
//DEFINE chama constantes
//define("PI", 3.15);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Olá, <?php echo(var_dump(!! []));?></h2>
</body>
</html>