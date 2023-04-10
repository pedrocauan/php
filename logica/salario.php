<?php 
/**
 * 
 * Escreva um programa que leia o número de um funcionário, seu número de horas trabalhadas, o valor que 
 * recebe por hora e calcula o salário desse funcionário.
 * A seguir, mostre o número e o salário do funcionário, com duas casas decimais.
 * 
 */

 $num_func = (int) fgets(STDIN);
 $hora_trab = (int) fgets(STDIN);
 $valor_hora = (double) fgets(STDIN);

 $salario = $hora_trab * $valor_hora; 
 //tira a virgula do resultado
 $salario_formatado = str_replace(",", "", number_format($salario, 2));

 echo "NUMBER = $num_func\n";
 echo "SALARY = U$ " . $salario_formatado. "\n";

?>