<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings em PHP</title>
</head>
<body>
    <h1>Strings em PHP</h1>
    <?php 
        // . -> contatena strings com ""

        $nome  = "Pedrones";
        $sobrenome = "Cauanes";
        $apelido = "pedrao12";

        // //double quoted (suporta interpolação de valores)
        // echo "$nome $sobrenome \u{1f596}";

        // //single quoted (não faz interpolação)
        // echo '$nome $sobrenome \u{1f596}';

        /* CONSTANTES NÃO SÃO INTERPOLÁVEIS NO PHP */
        const ESTADO = "SP \u{1F1E7}\u{1F1F7}";
        echo "Moro no estado de ESTADO";
        echo "<br>Moro no estado de " . ESTADO; /* usar concatenação */

        // Para constantes e resultados de função utiliza-se o . para concatenar
        echo "<br>Estamos no ano de " . date("Y");

        //Sequencia de escape
        /**
         * \n - nova linha
         * \t - tabulação
         * \\ - barra horizontal
         * \$ - caractere cifrão
         * \u{} - caractere unicode
         */
        echo "<br>$nome \t \"$apelido\" \t $sobrenome";

    ?>

<br>
<br>
<button><a href="../" style="display: block; text-decoration:none; color: black; font-size: 25px; width:100%;">voltar</a></button>
</body>
</html>