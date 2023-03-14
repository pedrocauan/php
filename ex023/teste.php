<?php 
    $cookie = $_COOKIE["name"];
    if(isset($cookie)){
        echo "Valor do cookie => {$cookie}";
    }
    else {
        echo "O cookie nao existe";
    }
?>