<?php
// Imprima a quantidade de A's presente na frase abaixo.
    $str = "O rato roeu a roupa do rei de roma";
    $a = 0;

    for($i = 0; $i < strlen($str); $i++){
        if($str[$i] == "a"){
            $a += 1;
            echo $str[$i] . "\n";
        }
    }

    echo $a;
//limpe uma string com espaços em branco
    $str1 = '    João     ';
    echo $str1 . "\n";
    echo trim($str1) . "\n";  //trim tira os espaços
    echo trim($str); //só o excesso.