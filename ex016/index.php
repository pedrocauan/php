<h1>for e foreach</h1>

<?php 
// for($count = 0; $count <= 10; $count++){
//     echo "8 x $count = " . 8 * $count . "<br>";
// }

$person = ["name" => "pedro", "age" => 22, "height" => 1.73];

foreach($person as $key => $value){
    echo("$key => $value <br>");
}


?>

<br>
<br>
<button><a href="../" style="display: block; text-decoration:none; color: black; font-size: 25px; width:100%;">voltar</a></button>