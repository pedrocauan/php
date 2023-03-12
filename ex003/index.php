<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em php</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 

        $bool = true;
        $float = 3.5;
        $int = 4;
        $string = "pao de batata";
        
        /*== ESCALÁVEIS == */
        // 0x = hexa 0b = bin 0 = octal
        // $num = 010; //8

        // echo "o valor da variavel é: $num";

        // $v = "Gustavo";
        /* mostra tipo de variavel*/
        // var_dump($v);

        /* 3 x 10^2 */
        // $num = (integer) 3e2; //Coersão de tipo (converte um tipo pra inteiro)
        // echo var_dump($num);

        // $num = (double) "1234";
        // var_dump($num);

        /* valores falsos -> 0, "", false, null*/
        //$casado = false;
        //var_dump($casado);
        //print "o valor para casado é $casado";

        /*== COMPOSTOS == */
        // $vet = [3,2,"Joao",5.2];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>

<br>
<br>
<button><a href="../" style="display: block; text-decoration:none; color: black; font-size: 25px; width:100%;">voltar</a></button>
</body>
</html>