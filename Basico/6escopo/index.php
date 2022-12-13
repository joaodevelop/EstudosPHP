<?php
    //ESCOPO - Local - Global - static - Parametros
    //local
    $c = 'sim';
    $x = 10;
    echo "$x escopo global"; //10
    function teste(){
        $x = 5;
        echo "<br>$x escopo local";
    }
    teste(); //5 local
    echo "<br> $x"; //10 global
    //Global
    function testando(){
        echo "<br> $x";
    }
    testando(); //undefined - global nao é acessivel em local

    function funcao(){
        global $c; //altera o escopo global da variavel qdo chamada a funçao
        $c = 'local para global';
        echo "<br> $c";
    }
    funcao();
    echo "<br> $c";
    //static
    function igual(){
        $n1 = 0;
        $n1++;
        echo "<br> $n1";
    }
    igual(); // 1
    igual(); // 1
    igual(); // 1
    function statica(){
        static $n1 = 0; // cada vez que a função é chamada o parâmetro do chamado anterior é mantido
        $n1++;
        echo "<br> $n1";
    }
    statica();//1
    statica();//2
    statica();//3
    //parâmetros de função
    function parametro($a, $b){
        echo "<br>";
        echo $a + $b;
    }

    parametro(3, 6); //9
