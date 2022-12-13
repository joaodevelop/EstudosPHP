<?php
    if(5>2){
        echo "Deu certo entrou no IF <br>";
    }

    if(10 === 10 && 9> 2){
        echo "Deu certo entrou no IF 2";
    }
    //else
    $a = 4;
    $b = 6;
    if($a > $b){ //escopo if/else é global
        echo "<br> if sendo executado";
    } else {
        echo "<br> Else sendo executado";
    }

    if($b > $a){
        echo "<br> Entrou no primeiro If";
    } if('teste' !== "teste"){
        echo "<br> entrou no If aninhado";
    } else {
        echo "<br> Entrou no else do aninhado";
    }

    //else if

    if($b < $a){
        echo "<br>entrou no If do else IF";
    } else if(10 > 2){
        echo "<br> Entrou no else IF";  //apenas essa aparece.
    } else if(16> 2){
        echo "<br> Entrou no else IF 2";  
    } else {
        echo "Entra no else se todas as outras forem falsas";
    }
    $x = 0;
    //switch
    switch($x){
        case 0:
            echo "<br> X é igual a 0";
            break; //necessário para impedir execução do resto do código
        case 1:
            echo "<br> X é igual a 1";
            break;
        default:
            echo "<br> X não é nenhum dos valores";
    }