<?php

require_once('inc/config.php');

try{
    $pdo = new PDO(
        "mysql:host=" . MYSQL_HOST . 
        ";dbname=" . MYSQL_DATABASE . 
        ";charset=" . CHARSET . 
        ";user=" . MYSQL_USER .
        ";password=" . MYSQL_PASS
    );

    // echo 'deu certo zé';
}

catch(PDOException $e){
    echo 'Erro de conexão' . $e->getMessage();
}