<?php
    //crie um array com valores batata maçã pera feijao e arroz
    //remova pera e feijao.

    $arr = [
        'batata',
        'maçã',
        'pera',
        'feijão',
        'arroz'
    ];

    $removidos = array_splice($arr, 2,  2);
    print_r($removidos);
    print_r($arr);