<?php
    function soma(){
        //codigo!
    }

    //function implode
    $arr = ['teste', 'Olá,', 'mundo!', 'Cão', 'gato'];
    $teste = implode(' ', $arr); //coloca entre os elementos do array o que estiver no primeiro parametro e retorna uma string
    echo $teste;

    function argumentos($a, $b){
        print_r(func_get_args()); //retorna um array com todos args da função
        print_r(func_num_args()); //retorna o valor da quantidade de argumentos

        return $a + $b;
    }

    function listaParaString($arr){
        $str = 'Você levou os seguintes itens: ';

        for($i = 0; $i < count($arr); $i++){
            $str .= "$arr[$i], ";
        }
        echo $str;
    }
    listaParaString($arr);

    function alteraDados($nome, $idade){
        $nome = "Sr. $nome";
        $idade = "$idade anos.";

        return [$nome, $idade];
    }

    $dados = alteraDados('João', 31);

    print_r($dados);
    echo "Olá, $dados[0]. Você têm $dados[1]"; //Olá Sr. João. Você têm 31 anos.
    //depurar dados.
    $lista = [
        'teste',
        1231,
        1.18,
        true,
        [1, 4, 17]

    ];

    var_dump($lista); //retorna o tipo de cada elemento do array inclusive da lista dentro do array