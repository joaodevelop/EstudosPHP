<?php
    //includes! inclui um arquivo em outro. sintax: arquivo.ext -- não gera erro fatal. Apenas warning
    include "teste.php";
    include_once "backend.php";
    ?>
    <p>Após o include!!</p>

    <?php
    //require - insere arquivo php ou html em outro. Gera um erro fatal se o arquivo nao existir.
    require "teste.php";  //include_once e require_once impedem que o mesmo arquivo seja chamado duas vezes na mesma pagina

    ?> 
    <p>Nao existe após o require se o arquivo nao existe.</p>

  
<?//SHORT TAG ?>
<?= 'substitui o echo'; ?>

<form action="">
    <div>
        <input type="text" value="<?= "teste short" ?>">
    </div>
    <input type="submit" value="Enviar">
</form>

<h1> Olá, <?= $nome ?>, seja bem vindo!</h1>
<p> Confira nossos principais produtos: </p>
<p>	<?php foreach($arr as $produto) : ?></p>
    <li><?= $produto ?></li>
    <?php endforeach; ?>
