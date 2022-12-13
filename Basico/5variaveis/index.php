<?php
    $vel = 100;
    $marca = 'Ferrari';
    $itens = ['Teto solar', "Motor 2.0", 'Porta Malas Grande', "Piloto automático"];
    echo $vel;
    echo "<br>$marca";
    echo "<br>";
    print_r($itens);
    $n1 = 3;
    $n2 = 5;
    $soma = $n1 + $n2;
    echo "<br>$soma";
    //variavel de outra variavel
    echo "<br>";
    $x = 'teste';
    $$x = 5;
    echo $teste; //5  cria variavel com o conteúdo da outra.
    //variavel por referencia
    $a = 2;
    $b =& $a;
    echo "<br> $b"; //2
    $b = 4;
    echo "<br> $a"; //4

