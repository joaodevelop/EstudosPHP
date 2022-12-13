<?php
    //PROGRAMAÇÃO ORIENTADA A OBJETOS
    class User{
        //propriedades
        //métodos
        function falar(){
            echo "Olá, eu sou um objeto! <br>";
        }
        function somar($a, $b){
            echo $a + $b . "<br>";
        }

    }

    $joao = new User;
    $joao->falar(); //Olá, eu sou um objeto!
    $matheus = new User;
    $matheus->somar(6, 90); //96
    class Car{
        public $rodas = 4;
        public $aro = 20;
        public $cor = 'prata';
        private $vidro = 'Sem película';
        public $portas = 4;
        //protected $portas = 4;

        public function colocaPelicula($pelicula){
            $this->vidro = $pelicula;
            echo $this->vidro;
        }
    }

    $palio = new Car;
    echo $palio->aro . "<br>"; //20
    $palio->cor = 'Vermelho';
    echo $palio->cor . "<br>"; //Vermelho
    //THIS
    class Animal{
        function escolherNome($nome){
            $this->nome = $nome;
        }

        function latir(){
            return "au au";
        }
        function latirForte(){
            return strtoupper($this->latir());
        }
    }

    $pounce = new Animal;
    echo "O nome do animal é $pounce->nome <br>"; //O nome do animal é
    $pounce->escolherNome("Pounce");
    echo "O nome do animal é $pounce->nome <br>"; //O nome do animal é Pounce
    echo $pounce->latirForte() . "<br>"; //AU AU
    //CONSTANTES EM CLASSE
    class Humano{
        public const OLHOS =2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConstante(){

            echo self::BRACOS . "<br>"; // para constantes e utilizam self ao inves de this.
        }
    }

    $jose = new Humano;
    echo $jose::OLHOS . "<br>"; //2
    echo $jose->mostrarConstante(); //2
    //VISIBILIDADE ----

    class Mecanico {
        public function alteraRodas($obj){
            $obj->rodas = 10;
        }
        public function colocaPelicula($carro, $pelicula){
            $carro->vidro = $pelicula;
        }
    }
    $jose = new Mecanico;
    $jose->alteraRodas($palio);
    echo "<br> $palio->rodas"; //10
    //$jose->colocaPelicula($palio, 'g20'); //fatal error, nao é possivel acessar private com metodos pertencentes a outra classe.
    $palio->colocaPelicula("<br>daboa<br>");//daboa --- a propria classe consegue acessar.
    echo $palio->portas . "<br>"; //se for protectedFatal error: Uncaught Error: Cannot access protected property Ca

    //ANCESTRALIDADE
    if($palio instanceof Car){
        echo "Palio é um carro. <br>"; //Palio é um carro.
    } else {
        echo "Palio não é um carro. <br>";
    }

    //INTERFACES
    interface Caracteristicas {
        //public function falar();
        const nome = 'Ailton';
    }

    class Cantor implements Caracteristicas {
        public $idade = 29;
        public function dizerNome(){
            echo "Meu nome é " . self::nome . "<br>";
        }
    }
    $paulo = new Cantor; //Caso não sejam implementados todos os metodos ERRO -> Class Cantor contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Caracteristicas::falar)
    $paulo->dizerNome(); //Meu nome é Ailton - nome pode ser declarado com const apenas na interface
    //TRAITS
    trait Objeto {

        public function teste(){
            echo "Testando trait de objeto <br>";
        }
    }

    trait Testando {

        public function traitTeste(){
            echo "Este método é da trait Testando <br>";
        }
    }

    class Central {

        use Objeto;
        use Testando; //forma de declarar uso das traits
    }

    $u = new Central;
    $u->teste(); //Testando trait de objeto
    $u->traitTeste();//Este método é da trait Testando

    //CLASSES ABSTRATAS
    abstract class TesteAbstract {

        public static function testandoClasse(){

            echo "Este método é de uma classe abstrata <br>";
        }
        abstract public function testeAbs(); //deve ser declarado na classe filha
    }

    //$t = new Teste; Uncaught Error: Cannot instantiate abstract class Teste in 

    TesteAbstract::testandoClasse(); //Este método é de uma classe abstrata - precisa ser static

    class Nova extends TesteAbstract {

        public function testeAbs(){
            echo "Método abstrado";
        }
    }

    $n = new Nova; //Fatal error: Abstract function TesteAbstract::testeAbs() cannot contain body in C:\laragon\www\Intermediario\OOP\index.php on line 141
    $n->testeAbs(); //Método abstrado
    //CONSTRUCTOR
    
    class Linguagens{


        public $frontend;
        public $backend;
        public $idade = 21;

        function __construct($frontend, $backend, $data){ //constructor precisa ter dois _ _
            $this->frontend = $frontend;
            $this->backend = $backend;
            $this->idade = $data;
        }
    }

    $programador = new Linguagens("Angular", "Python", 25);

    echo "<br>teste: $programador->frontend e a data é $programador->idade <br> ";
    //CLASSES ANÔNIMAS
    $gente = new class(){
        public $dado = 'd20';

        public function dizerDado(){
            echo "<br> Olá, este aqui é o dado:  $this->dado <br>";
        }
    };

    echo $gente->dado; //d20
    echo $gente->dizerDado(); //Olá, este aqui é o dado: d20

    //VERIFICANDO CLASSES
    if(class_exists("Linguagens")){
        echo "A Classe existe! <br>"; //A Classe existe!
    }

    print_r(get_class_vars("Linguagens")); //Array ( [frontend] => [backend] => [idade] => 21 )

    //Verificando objetos
    if(is_object($gente)){
        echo "<br> É um objeto";  //É um objeto
    }

    if(is_object($programador)){
        echo "<br> É um objeto";  //É um objeto
    }

    $string = 'string';
    if(is_object($string)){
        echo "É um objeto";
    } else {
        echo "<br> Não é um objeto <br>"; //Não é um objeto
    }
    echo get_class($programador); //Linguagens
    if(method_exists($paulo, 'dizerNome')){
        echo "<br> O Método existe. <br>"; //O Método existe.
    }