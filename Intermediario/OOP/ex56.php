<?php
    //classe humano com propriedades e metodo falar.
    //classe professor que herda humano com metodos e propriedades próprias

    class Humano{
        public $peso = 'Entre 40 a 100kg';
        public $altura = 'Entre 1.5 até 2.5m';
        public function falar(){
            echo "Olá mundo!";
        }
    }

    class Professor extends Humano{
        public $uniforme = 'Usa uniforme';
        public $salario = 2000;
        public function ensinar(){
            echo "O homem é o lobo do homem";
        }
    }

    $joao = new Professor;
    echo $joao->peso;
    $joao->falar();
    $joao->ensinar();
