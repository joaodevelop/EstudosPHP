<?php
//crie uma classe carro que tenha funcoes de get e set velocidade máxima
class Carro{
   public $velocidade_maxima = 0;

    function setVelocidadeMaxima($valor){
        $this->velocidade_maxima = $valor;

    }

    function getVelocidadeMaxima(){
        return $this->velocidade_maxima;
    }
}

$carro = new Carro;
$carro->setVelocidadeMaxima(260);
echo $carro->getVelocidadeMaxima(); //260