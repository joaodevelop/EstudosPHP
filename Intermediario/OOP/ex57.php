<?php
    class Cachorro{
        public $tamanho;
        public $raca;
        public $cor;
        const patas = 4;

        function __construct($tamanho, $raca, $cor){
            $this->tamanho = $tamanho;
            $this->raca = $raca;
            $this->cor = $cor;
        }

        function dadosCachorro($dog){
            echo "O cachorro tem tamanho $dog->tamanho , é da raça $dog->raca e da cor $dog->cor. Todos eles têm " . self::patas . " patas.";
        }
    }

    $theo = new Cachorro('Pequeno', 'Shitzu', 'Malhado');
    $theo->dadosCachorro($theo);


