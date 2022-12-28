<?php
    include_once("helpers/url.php");
    include_once("data/posts.php");
    include_once("data/categories.php");

    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Joao Dev</title>
    <!-- Estilo do projeto -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <!--FONTE-->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id='logo'>
        <img src="<?= $BASE_URL?>/imgs/logo.svg" alt="Blog Joao">
    </a>
    <nav>
        <ul id='navbar'>
            <li><a href="<?=$BASE_URL?>"  class="linknav">Home</a></li>
            <li><a href="#" class="linknav">Categorias</a></li>
            <li><a href="#" class="linknav">Sobre</a></li>
        </ul>
    </nav>
    </header>
