<?php

    session_start();
    //print_r($_SESSION);

    $_SESSION['nome'] = "João"; //Valor fica salvo em cookie e é transmitido para outras áreas do site

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
    <h1>Olá Session!</h1>
</body>
</html>