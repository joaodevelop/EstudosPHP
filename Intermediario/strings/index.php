<?php
    $idade = 31;

    echo "Eu tenho $idade anos.";
    echo "Eu tenho {$idade} anos."; //iguais
    //valores de escape que executam funçoes na String. sempre aspas duplas.
    // pular linha
    echo "Isso fica na primeira linha \n";
    echo "Isso fica na segunda linha \n";
    //tab
    echo "testando o tab \t";
    //barra invertida
    echo "testando a barra invertida \\"; //sai uma barra só.
    //$
    echo "Para imprimir o $ com uma palavra que não seja variavel \$teste";

    //imprimindo algo com print
    print("A idade de João é $idade anos");
    //printf
    $n = 10;
    //%s string %d inteiro - %f -- $float
    printf("O número é %d e o outro é %f \n", $n, 12.6) ;

    //TAMANHO DA STRING
    $str1 = "String enorme com vários caracteres\n";
    $str2 = "Str menor";
    echo strlen($str1) . "\n"; //37
    echo strlen($str2);

    function percorreStr($str1){
        for ($i = 0; $i < strlen($str1); $i++){
            echo "$str1[$i] \n";
        }
    }

    percorreStr($str2);

    //alterando STRINGS upper e lower.

    echo strtoupper($str1); //uppercase
    echo strtolower($str1); //lowercase

    ucfirst($str1); //primeira letra da str em maiuscula;
    ucwords($str2); //primeira letra de cada palavra maiúscula.

    //remover tags HTML
    $textoHTML = "<p> testando um paragrafo </p> <h1> título </h1>"; //testando um paragrafo   título 
    $textoSemHtml = strip_tags($textoHTML);
    echo $textoSemHtml;
    // resgatando parte da string - substr
    $str = "bem vindo a string";
    $minha = substr($str, 4, 5);
    echo "\n $minha"; //vindo
    echo substr($str, 4); //vindo a string. omitir o ultimo arg vai ate o final
    echo substr($str, 4, -3);//vindo a str. negativo retira os último caracteres.
    strrev($str); //inverte a string
    $repete = 'frase repetida';
    echo str_repeat($repete, 3);
    //string para array
    $frase = 'testando o explode';
    $fraseArray = explode(' ', $frase); //primeiro argumento é o separador
    print_r($fraseArray); //      [0] => testando
                                //[1] => o
                                //[2] => explode
    //Array para string
    echo implode(', ', $fraseArray); // testando, o, explode
    //strpos
    $string = "Testando o método strpos. Ele permite encontrar um determinado valor na string.";
    echo strpos($string, 'strpos');//19
    //strrpos - reversed
    $valor = 'caderno, cachorro, gato, galinha, gato, beija-flor-, gato, rato';
    echo strrpos($valor, 'gato <br>'); //53 encontra o último
    //strstr encontra um texto na stirng e retorna o restante dela - retorna false se nao encontrar
    echo strstr($string, 'strpos'); //Ele permite encontrar um determinado valor na string.
    //decompondo URL
    $url = 'https://www.google.com/usuarios/joaopedro?id=12&nome=Joao';
    $arrayUrl = parse_url($url);
    print_r($arrayUrl); // Array ( [scheme] => https [host] => www.google.com [path] => /usuarios/joaopedro [query] => id=12&nome=Joao )
