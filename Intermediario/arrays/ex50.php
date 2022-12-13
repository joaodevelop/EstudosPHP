<?php
$pessoas = [
        'Joao' => 30,
        'Vitória' => 25,
        'Lucas' => 23,
        'Beto' => 48,
        'Pedro' => 26
    ]; ?>
    <br>
    <table border='1'>
            <tr> <th>Nome</th> <th>Idade</th> </tr> 

    <?php foreach($pessoas as $nomes => $idades): ?>
        <tr>
            <td> <?=$nomes ?></td>
            <td> <?=$idades ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
