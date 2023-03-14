<?php 
//data de expiração do cookie
$data = time() + 2 * 24 * 60 * 60; // 2 dias, 24 horas, 60 minutos e 6 segundos

/* strtotime() -> transforma string em hora pra ser usado como parametro */

// 1p -> nome, 2p -> valor, 3p -> tempo 
setcookie("curso", "PHP", strtotime("-4days")); //cria cookie

?>

<a href="./ex023/teste.php">ver se o cookie existe</a>