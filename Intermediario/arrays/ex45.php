<?php
    //crie um array de 10 a 45. Imprima os numeros com uma soma de 6. se passar de trinta tambem imprimir que o valor é muito alto.
    $arr = range(10, 45);
    for($i = 0; $i < count($arr); $i++){
        $currentNumber = $arr[$i] + 6;
        if($arr[$i] + 6 >= 30){
            echo "O numero somado com 6 é $currentNumber. Este número é muito grande! <br>";
        } else {
            echo "O número somado com 6 é $currentNumber. <br>";
        }
    };