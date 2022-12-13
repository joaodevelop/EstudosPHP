<?php
    $x = 0;
    //ESTRUTURA WHILE
    while($x < 10){
        echo $x . "<br>";
        $x++;
    }

    echo "Continuando o código!<br>";
    class car {
        public $color;
        public $type;
    }

    $myCar = new car();
    $myCar->color = 'red';
    $myCar->type = 'palio';

    $arr = ['str', 67, true, 'João', $myCar, false, 98, 'outra string', 125.68, '44', 15];
    $y = 0;
    while($y <= 10){
        if(is_string($arr[$y])){ //is_object --> car Object ( [color] => red [type] => palio )
            print_r($arr[$y]);
            echo "<br>";
        }
        $y++;
    }

    //LOOP ANINHADO
    $n1 = 1;
    while($n1 <= 10){
        echo "loop externo $n1 <br>";
        $n1++;
        $j = 1; //necessario que esteja dentro do externo e fora do interno.
        while($j <= 5){
            echo "loop interno $j <br>";
            $j++;           
        }
    } /*loop externo 1
    loop interno 1
    loop interno 2
    loop interno 3
    loop interno 4
    loop interno 5
    loop externo 2 ...*/
    //instruçao CONTINUE - pula uma repetiçao

    $a = 10;
    while($a > 0){

        if($a == 7 || $a == 5){
            echo "pulou a execução $a <br>";
            $a--;
            continue; // nao executa o código abaixo.
        }

        echo "executando o looping $a <br>";
        $a--;
    }

    $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    print_r(count($array));
    $n2 = 0;
    while($n2 <= sizeof($array) - 1){
        if($array[$n2] == 30 || $array[$n2] == 40){
            $n2++;
            continue;
        }
        echo ' ';
        echo $array[$n2];
        $n2++;
    }
    // DO WHILE
    $do = 0;
    do {
        echo "testando do while $do";
        $do++;
    } while($do < 10);
    //ESTRUTURA FOR
    for($i = 0; $i < 9; $i++){
        if($i == 4){
            echo ' chegou no 4';
        }
        if($i == 8){
            echo "  Agora sim o 8";
        }
        echo "testando for $i";

    }
    $lista = [];
    for($t = 1; $t <= 10; $t++){
        array_push($lista, $t);

    }
    print_r($lista);
    // FOREACH
    $nomes = ['Tiago', 'Jhon', 'Gustavo', 'Luca'];

    foreach($nomes as $nome){ //necessario array determinado. o indice é cada um dos items
        if($nome == 'Jhon'){
            echo " Esse não";
            continue;
        }
        echo " O nome atual é $nome.";

    }

