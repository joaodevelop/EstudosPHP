<?php
    $pontos = [
        "Joao" => 9,
        "Izadora" => 5,
        "Mano Fala" => 3,
        "Saulim" => 2,
        "Morais" => 10
    ];

    arsort($pontos);?>
    <ol>
        <?php foreach($pontos as $ranking => $valor): ?>
            <li><?="$ranking - $valor"?></li>
            <?php endforeach; ?>
        </ol>