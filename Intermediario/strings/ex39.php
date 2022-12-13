<?php
    //criar função que recebe arg um array associativo nome=> preço.
    //retornar items > R$10.
    //imprimir o retorno.

    $arr = [
        "Tesoura" => 10,
        'Papel' => 1,
        'Caderno' => 20,
        "Capis" => 2,
        "Caneta" => 5,
        'Mochila' => 50
    ];

    function itemsCaros($arr){
        $lista = [];

        foreach($arr as $item => $preco){
            if($preco >= 10){
                array_push($lista, $item);

            }
        }
        return $lista;
    }

    print_r(itemsCaros($arr));
