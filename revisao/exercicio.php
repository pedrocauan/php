<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@100;200;300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="exercicio.css">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso Php</h1>
        <h2>Visualização do exercicio</h2>
    </header>
    <nav class="navegacao">
        <a href="#" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
           <?php 
            //É possivel pegar o caminho pelo get do url
            //include($_GET['dir'] . "/" . $_GET['file'] . ".php");
            // $_GET['dir']
            // $_GET['file']

            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            // include("teste/teste.php");

            /* 
                __DIR__ é a variavel do php que guarda o caminho do arquivo
                dir e file são parametros passados no get
            */
           ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS &COPY; <?= date('Y'); ?>
    </footer>
</body>

</html>