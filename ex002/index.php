<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        //muda a timezone do objeto date
        date_default_timezone_set("America/Sao_Paulo"); //GMT-3 timezone do brasil para horario
        echo "hoje é dia " . date("d/M/Y");
        echo " e a hora atual é ". date("G:i:s T");

    ?>

<br>
<br>
<button><a href="../" style="display: block; text-decoration:none; color: black; font-size: 25px; width:100%;">voltar</a></button>
</body>
</html>