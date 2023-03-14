
<?php 
//conexão com o db
function connection(){
    
    $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    // 1p -> database, 2p -> usuaio, 3p -> senha
    $pdo = new PDO("mysql:host=localhost;dbname=library", "usuario", "", $options);
    return $pdo;
}

// pega dados do db
function getData($table){
    $connection = connection(); //inicia conexao
    $query = $connection -> query("select * from {$table}"); //Prepara a query
    $query-> execute(); // executa a query

    /* PDO::FETCH_ASSOC -> evita query duplicada */
    return $query -> fetchAll(); //retorna os dados da query
}   

var_dump(getData("book"));


?>




<br>
<br>
<button><a href="../" style="display: block; text-decoration:none; color: black; font-size: 25px; width:100%;">voltar</a></button>