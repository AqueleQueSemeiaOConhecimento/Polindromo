<?php

require_once('conection/conection.php');

$word = $_POST['palavra'];

// ver se é string
if(!is_string($word)){
    die('Esse valor não é valido');
}


// excluir caracteres especiais
function string_valit($entrada){
    if(preg_match('/^[a-zA-Z0-9]+/', $entrada))
    {
        return true;
    }
    else{
        die('Caracteres especais são invalidos!');
        header("Location: index.html");
        exit();
    }
}

string_valit($word);



function string_reverse($string){
    $reverse_string= '';
    $lenght = strlen($string);

    for($i = $lenght - 1; $i >= 0; $i--){
        $reverse_string .=$string[$i];
    }

    return $reverse_string;
}

$reverse_word = string_reverse($word);


require_once('input_bd.php');
