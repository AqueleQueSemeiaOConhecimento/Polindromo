<?php

require_once('conection/conection.php');
require_once('post.php');

$word = $_POST['palavra'];

if($word == $reverse_word)
{
    $booleano = 1;
}
else{

    $booleano = 0;
}


$stdm = $pdo->prepare("INSERT INTO polindromo (id, palavra, bool, data) values(0, :palavra, :bol, NOW())");
$stdm->bindParam(':palavra', $word);
$stdm->bindParam(':bol', $booleano);
$stdm->execute();

if($booleano == 1){
    require_once('true.php');
}
else{
    require_once('false.php');
}
