<?php

    $method = $_SERVER['REQUEST_METHOD'];
    if(isset($_POST['nome'])){

        $nome = $_POST['nome'];
    } else {
        $nome = "(Nome não informado)";
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Se o metodo utilizado na página for GET irá carregar o formulário.
        if($method == 'GET'):
    ?>
    <form action="index.php" method="POST">
        <div>
            <input type="" name="nome" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
    //se o método for outro, carregará a versão abaixo:
        else:
    ?>
        <h1>O seu nome é <?= $nome?></h1>
    <?php
    endif; ?>
    
</body>
</html>