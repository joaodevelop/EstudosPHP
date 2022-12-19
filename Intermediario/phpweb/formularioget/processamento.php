<?php

if(isset($_GET['nome'])){
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
} else {
    $nome = 'padrão';
    $idade = "N/A";
}


?>

<h1>O seu nome é <?= $nome ?></h1> <?//O seu nome é João?>
<h1>Sua idade é <?=$idade?></h1> <?//Sua idade é 31?>