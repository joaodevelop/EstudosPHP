<?php
//tipo implicito
    echo 5 / 2; //2.5 float
    $x = 5 . 5;
    if(is_string($x)){
        echo "teste";
    };
    
    $a = '5' * 12;
    echo gettype($a); //int php transforma o string em number se puder.
    //OPERADORES ARITIMÉTICOS + - / *
    echo 2 + 2; //4
    echo 2 - 1; //1
    echo 4 / 2; //2
    echo 2 * 3; //6
    echo 4 % 2; //0
    echo 5 ** 2; //25
    echo 5 . 2; //52 concatenaçao
    echo 'teste' . ' a ' . 'concatenacao';//teste a concatenacao
    echo 'é possivel concatenar também variáveis' . ' ' . $a;
    //++ e -- para incremento.
    //Operadores de comparação.
    "5" == 5; //true
    "5" == 5; //false
    5 === 5; //true
    5 != 6; //true diferença
    5 !== '5'; //true
    5 > 4; //true
    5 < 8; //true
    5 <= 5; //true
    //OPERADORES LOGICOS && || !
    5 > 2 && 10 < 100; //true
    5 > 2 || 10 > 100; //true
    !true; //false
    !(5>2); //false
    //operador CAST
    $y = (int) '12';
    if($y === 12){
        echo "É identico."; //é identico
    }
    $u = (int) 'auhsuahsu'; //0
    $int = (int) '3,14'; //3
    echo $int;
    //operadores de atribuiçao += -= *= /=
    // Operador ternario
    echo 5 > 2 ? "5 é maior que 2" : "5 menor que dois"; // 5 é maior que dois. If/else

