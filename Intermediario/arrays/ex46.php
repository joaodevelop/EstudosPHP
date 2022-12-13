<?php
    //crie um array multidimensional com 3 arrays de 4 elementos cada. 
    //imprima os elementos de cada um dos arrays.
    //imprima também quando está mudando de array.

    $arr = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12]
    ];

    for($i = 0; $i < count($arr); $i++){
        
        echo $i > 0 ?  "Mudando o array <br>" : NULL;
        for($c = 0; $c < count($arr[$i]); $c++){
            echo $arr[$i][$c] . "<br>";
        }
    }