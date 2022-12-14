<?php
    //Trabalhar com DATAS
    $d = date('d/m/y'); ///
    echo $d; //13/12/22
    $d2 = date('D/M/Y');
    echo "<br> $d2"; //Tue/Dec/2022
    $d3 = date('d/M/Y');
    echo "<br> $d3"; //13/Dec/2022 
    //https://www.php.net/manual/en/function.date.php documentação do PHP
    
    //Função strtotime
    $cincodias = strtotime('5 days');
    echo "<br> $cincodias <br>"; //1671371319 - time stamp em segundos em relação a data do sistema
    $dataAtualMais5 = date('d/m/Y', $cincodias);
    echo $dataAtualMais5; // 18/12/2022  (cinco dias após a data do sistema)
    $doisMeses = strtotime('2 months');
    echo "<br> $doisMeses <br>";
    $dataAtualMais2Meses = date('d/m/Y', $doisMeses);
    echo $dataAtualMais2Meses; //13/02/2023

    //função mktime
    //parametros hora, minuto, segundo, mes, dia e ano sem 0 a esquerda
    $n = mktime(18, 12, 44, 8, 12, 1991);
    echo "<br> $n <br>"; //682020764
    echo date('d/m/Y', $n); //12/08/1991
    $dataEspecifica = mktime(10, 10, 11, 1, 1, 2031);
    $dataFutura = date('d/m/Y', $dataEspecifica);
    echo "<br> $dataFutura <br>"; //01/01/2031

    //DateTime
    $date = new DateTime();
    print_r($date); //DateTime Object ( [date] => 2022-12-13 14:17:41.352583 [timezone_type] => 3 [timezone] => UTC )
    echo "<br>";
    echo $date->format('d/m/y') . "<br>"; //13/12/22
    echo $date->format('D/M/Y') . "<br>"; //Tue/Dec/2022
    //data + 7 dias
    $date->modify('+7 days'); //20/12/22
    echo $date->format('d/m/y') . "<br>";

    //setDate altera a data e setTime altera hora minuto e segundo
    print_r($date); //DateTime Object ( [date] => 2022-12-20 14:32:25.406103 [timezone_type] => 3 [timezone] => UTC )
    $date->setDate(1991, 8, 12);
    echo "<br>";
    print_r($date); //DateTime Object ( [date] => 1991-08-12 14:32:25.406103 [timezone_type] => 3 [timezone] => UTC )
    echo "<br>";
    $date->setTime(14, 15, 40);
    print_r($date); //DateTime Object ( [date] => 1991-08-12 14:15:40.000000 [timezone_type] => 3 [timezone] => UTC )
    echo $date->format("d/m/Y"); //12/08/1991

    //DIFERENÇA ENTRE DATAS
    $data1 = new DateTime();
    $data2 = new DateTime();

    $data2->setDate(2001, 9, 11);
    echo "<br>";
    print_r($data1); //DateTime Object ( [date] => 2022-12-13 14:38:03.452947 [timezone_type] => 3 [timezone] => UTC )
    echo "<br>";
    print_r($data2); //DateTime Object ( [date] => 2001-09-11 14:38:03.452948 [timezone_type] => 3 [timezone] => UTC )
    echo "<br>";
    $dif = $data1->diff($data2);
    print_r($dif); //DateInterval Object ( [y] => 21 [m] => 3 [d] => 1 [h] => 23 [i] => 59 [s] => 59 [f] => 0.999999 [weekday] => 0 [weekday_behavior] => 0 [first_last_day_of] => 0 [invert] => 1 [days] => 7762 [special_type] => 0 [special_amount] => 0 [have_weekday_relative] => 0 [have_special_relative] => 0 )
    
    //COMPARAR DATAS
    if($data1 > $data2){
        echo "<br> A Data 1 é maior que a data 2"; //A Data 1 é maior que a data 2
    } else {
        echo "<br> A data 2 é maior que a data 1";
    }

    //Alterando o fuso horario
    date_default_timezone_set("America/Sao_Paulo");
    echo "<br>";
    print_r($data1);