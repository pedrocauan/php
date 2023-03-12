<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis de variaveis</title>
</head>
<body>
    <h1>Variaveis de variaveis</h1>
    <?php 
        $bebida = "refrigerante";
        $$bebida = "guarana";

        echo $refrigerante;
    ?>
</body>
</html>