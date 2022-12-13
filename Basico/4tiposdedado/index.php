<?php
//inteiros
    echo 5;
    echo "<br>";
    echo 5 + 7; //12
    echo "<br>";
    echo -12;
    echo "<br>";

    if(is_int(42)){
        echo "é inteiro";
    }
    if(is_int('sa')){ //false
        echo "é inteiro";
    }

    //float
    $a = 3.14;
    if(is_float($a)){
        echo "É um float";
    }
    echo "<br>";
    echo 12.5 + 12.5654;
    echo "<br>";
    if(is_float(-12.5423)){ //true
        echo 'É um float';
    }

    //strings
    $str = "<br>testando strings<br>";
    echo 'testando strings com aspas simples<br>';
    echo "com aspas duplas pode-se ler variáveis: $str";
    if(is_string($str)){
        echo "Sim é string<br>";
    }
    //booleans

    echo true; //1
    echo false; //vazio;
    echo "<br>";
    if(is_bool(false)){
        echo "é booleano<br>";
    }
    if(0 == false){ 
        echo "0 não é booleano mas é considerado falso. <br>";
    }
    //Array
    $lista = [1, 2, 3, 4, 5];
    //echo $lista; //errado!
    print_r($lista);
    echo "<br>";
    echo $lista[2]; //retorna String com Echo.
    echo "<br>";
    $novaLista = ["Opa", 15, true];
    print_r($novaLista);
    //Array associativo
    echo '<br>';
    $arr =  ['nome' => 'Shark', 'patas' => 4, 'cor' => 'preto'];
    echo $arr['patas']; //4
    echo "<br>";
    print_r($arr);
    $carro = [
        'marca' => 'BMW',
        'rodas' => 4,
        'teto_solar' => true,
        'velocidade_max' => 300,
        'blindado' => false
    ];
    print_r($carro);
    $marca = $carro['marca'];
    echo $marca;
    $velocidadeMax = $carro['velocidade_max'];
    echo "<br>";
    echo "O carro é da marca $marca e atine velocidade de $velocidadeMax";
    //desafio - array associativo caracteristicas de pessoa. If printando msg se ela for maior de idade.
    $pessoa = ['nome' => "João", 'idade' => 30, 'profissao' => 'advogado'];
    $idade = $pessoa['idade'];
    if($idade>=18){
        echo "<br>Maior de idade";
    }
    //Objetos

    class Pessoa {
        function falar(){
            echo "olá, pessoa!";
        }
    }
    echo "<br>";
    $joao = new Pessoa();
    $joao->nome = 'João';
    echo $joao->nome; //João
    echo "<br>";
    echo $joao->falar(); // olá, pessoa
    //null
    echo null; //vazio
    $no = null;
    if(is_null($no)){
        echo "<br>o valor é nulo.";
    }

