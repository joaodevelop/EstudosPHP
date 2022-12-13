<?php
    //Transformar a string "Este item está em promoção" para "Este item está em PROMOÇÃO"
    $str = "este item está em promoção.";
    function upPromo($str){
        $promo = 'promoção';
        $bigPromo = 'PROMOÇÃO';
        echo str_replace($promo, $bigPromo, $str);
    }

    upPromo($str);
    