<h1>Switch Case</h1>

<form action="" method="get">
    <label for="cor">Digite uma cor</label>
    <input type="text" name="cor" id="cor">
    <button>Enviar</button>
</form>


<?php
/**
 * condicionais
 * switch
 * case
 * 
 */

$cor = $_GET["cor"];
switch ($cor):
    case "vermelho":
        echo "Sua cor preferida é vermelho";

    case "verde":
        echo "Sua cor preferida é verde";
        break;

    case "azul":
        echo "Sua cor preferida é azul";
        break;
    default:
        echo "Digite a cor certa";
endswitch;
?>