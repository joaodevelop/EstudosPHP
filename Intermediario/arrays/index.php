<?php
    //add valores para array
    $arr = [];
    $arr[0] = 1;
    $arr[1] = 2;
    $arr[2] = 3;
    $arr[] = 4; //sempre adicionada no último indice.
    print_r($arr); // Array ( [0] => 1 [1] => 2 [3] => 3 )
    echo '<br>';
    $arr[2] += 6;
    print_r($arr); // Array ( [0] => 1 [1] => 2 [2] => 9 )
    $arrAssoc = [];
    $arrAssoc["Carro"] = 'Palio';
    $arrAssoc["Carro"] = 'Fusca';
    $arrAssoc['Helicoptero'] = 'Pegasus';
    echo "<br>";
    print_r($arrAssoc);// Array ( [Carro] => Palio [Helicoptero] => Pegasus )
    echo "<br>";
    //array usando range
    $lista = [];
    $lista = range(1, 10); //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 [9] => 10 )
    print_r($lista);
    //count
    echo count($lista); //10
    //array multidimensional
    $multidimensional = [
        [1, 2, 3],
        [ 2, 4 , 6]
    ];
    echo "<br>";
    print_r($multidimensional);
    echo "<br>";
    print_r($multidimensional[0][1] . "<br>"); //acessando primeiro array e segundo elemento - 2
    echo count($multidimensional[0]); // 3 
    //criando várias Variáveis
    $pessoa = ['João', 31, "Programador", 'Azul'];
    list($nome, $idade, $profissao, $cor) = $pessoa;  
    echo "$nome <br>"; //joao
    echo "$idade <br>"; //31
    echo "$profissao <br>"; //programador
    echo "$cor <br>"; //azul
    //array_slice -- resgata parte do array - 3 param - arrai - indice inicial e nº de elementos.
    print_r(array_slice($lista, 3, 3)); //Array ( [0] => 4 [1] => 5 [2] => 6 )
    echo "<br>";
    print_r(array_slice($lista, 3)); // sem o último índice busca-se até o final Array ( [0] => 4 [1] => 5 [2] => 6 [3] => 7 [4] => 8 [5] => 9 [6] => 10 )
    //DIVIDIR ARRAYS -- chunk cria um array com outros arrays dividido de acordo com o parâmetro passado.
    echo "<br>";
    print_r(array_chunk($lista, 3)); // Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [1] => Array ( [0] => 4 [1] => 5 [2] => 6 ) [2] => Array ( [0] => 7 [1] => 8 [2] => 9 ) [3] => Array ( [0] => 10 ) )
    //CHAVES E VALORES
    $carro = [
        "marca" => 'Palio',
        'cor' => 'Vermelho',
        'teto_solar' => false,
        'cambio' => 'manual',
        'portas' => 2
    ];
    $chaves = array_keys($carro);
    echo "<br>";
    print_r($chaves); // Array ( [0] => marca [1] => cor [2] => teto_solar [3] => cambio [4] => portas )
    print_r( array_values($carro)); //Array ( [0] => Palio [1] => Vermelho [2] => [3] => manual [4] => 2 )
    //VERIFICAR SE CHAVE EXISTE
    if(array_key_exists('marca', $carro)){
        echo "<br> A chave existe!";
        echo array_key_exists('marca', $carro); //retorno 1 ou 0.
    }
    if(isset($carro['teto_solar'])){
        echo "<br> Existe!"; //isset mais utilizado também verifica existencia da chave
    }
    //ARRAY_SPLICE - recebe array, indice inicial e quantos itens desejamos remover. MODIFICA o array anterior
    //no terceiro parâmetro deixar vazio remove até o final. deixar -1 permance somente o ultimo item.
    echo '<br>';
    print_r(array_splice($lista, 2, 4)); //Array ( [0] => 3 [1] => 4 [2] => 5 [3] => 6 )
    echo "<br>";
    print_r($lista);// O novo array fica Array ( [0] => 1 [1] => 2 [2] => 7 [3] => 8 [4] => 9 [5] => 10 )
    extract($carro);
    echo "$cor <br>"; //Vermelho
    //COMPACT criando array
    $conta = '23312';
    $tipo = 'corrente';
    $cartaoDeCredito = true;
    $banco =  compact('conta', 'tipo', 'cartaoDeCredito');
    print_r($banco); //Array ( [conta] => 23312 [tipo] => corrente [cartaoDeCredito] => 1 )
    //foreach e arrays
    echo "<br>";
    foreach($carro as $peca => $value){
        echo "$peca => $value "; // marca => Palio cor => Vermelho teto_solar => cambio => manual portas => 2
    }
 //reduce - passa uam funçao por todos os membros do array
    $numeros = [1, 2, 4, 15, 89, 6, 87, 55];
    function soma($a, $b){
        return $a + $b;
    }

    $resultado = array_reduce($numeros, 'soma');
    echo "<br> $resultado"; //259
    //funcao in_array
    if(in_array('cor', $carro)){
        echo "<br> Há o item no Array"; //busca somente o valor e nao a chave
    } else{
        echo "<br>Não há o item no array.";
    }
    //ORDENAR ARRAY - SORT
    echo "<br>";
    sort($numeros);
    print_r($numeros); //Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 6 [4] => 15 [5] => 55 [6] => 87 [7] => 89 )
    rsort($numeros);
    echo "<br>";
    print_r($numeros); //Array ( [0] => 89 [1] => 87 [2] => 55 [3] => 15 [4] => 6 [5] => 4 [6] => 2 [7] => 1 )
    $nomes = ['Joao', 'Zira', 'Alfredo', 'Silas', 'Matheus', 'Bruna'];
    sort($nomes);
    echo "<br>";
    print_r($nomes); //Array ( [0] => Alfredo [1] => Bruna [2] => Joao [3] => Matheus [4] => Silas [5] => Zira )
    //ORdenar arrays associativos
    $pessoas = [
        'Joao'=> 31,
        'Karina' => 27,
        'Luiza' => 1,
        'Severo' => 56,
        'Alberto' => 66
    ];
    ksort($pessoas); //ordenar pelas chaves
    echo "<br>";
    print_r($pessoas); //Array ( [Alberto] => 66 [Joao] => 31 [Karina] => 27 [Luiza] => 1 [Severo] => 56 )
    arsort($pessoas); //ordenar pelos valores inversa
    echo "<br>";
    print_r($pessoas); //Array ( [Alberto] => 66 [Severo] => 56 [Joao] => 31 [Karina] => 27 [Luiza] => 1 )
    asort($pessoas); //ordernar pelos valores em ordem crescente.
    echo "<br>";
    print_r($pessoas); //Array ( [Luiza] => 1 [Karina] => 27 [Joao] => 31 [Severo] => 56 [Alberto] => 66 )
    //REVERTENDO ARRAYS
    echo "<br>";
    print_r(array_reverse($nomes));//Array ( [0] => Zira [1] => Silas [2] => Matheus [3] => Joao [4] => Bruna [5] => Alfredo )
    //DEIXAR O ARRAY ALEATÓRIO
    echo "<br>";
    shuffle($nomes);
    print_r($nomes); //Array ( [0] => Silas [1] => Alfredo [2] => Joao [3] => Zira [4] => Bruna [5] => Matheus )
    //SOMANDO ITENS DE UM ARRAY
    $soma = array_sum($numeros);
    echo "<br> $soma"; //259
    //UNINDO ARRAYS
    $numeros2 = [4, 9, 8, 100, 1235, 12];
    $merge = array_merge($numeros, $numeros2);
    echo "<br>";
    print_r($merge); //Array ( [0] => 89 [1] => 87 [2] => 55 [3] => 15 [4] => 6 [5] => 4 [6] => 2 [7] => 1 [8] => 4 [9] => 9 [10] => 8 [11] => 100 [12] => 1235 [13] => 12 )
    //VERIFICAR DIFERENÇAS DE ARRAYS
    $numeros3 = [4, 8, 126, 987, 1];
    $dif = array_diff($numeros2, $numeros3); // cria novo array apenas com que não é igual
    echo "<br>";
    print_r($dif); //Array ( [1] => 9 [3] => 100 [4] => 1235 [5] => 12 ) 