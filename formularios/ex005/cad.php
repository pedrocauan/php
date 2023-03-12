<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Resultado</title>
</head>
<body>
     <header>
        <h1>resultado do processamento</h1>
     </header>
     <main>
        <?php 
            //variavel super global
            //var_dump($_REQUEST); // $_GET $_POST e $_COOKIES
            // $_GET -> pega os parametros passados por url
            // $_POST -> pega os parametros passados via POST
            // $_REQUEST -> junção de GET, POST e  cookies
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome  = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>prazer te conhecer, $nome $sobrenome</p>";
        ?>

        <div><a href="javascript:history.go(-1)">voltar</a></div>
     </main>

</body>
</html>