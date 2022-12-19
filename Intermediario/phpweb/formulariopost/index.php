<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="Marca do carro">
        </div>
        <div>
            <input type="text" name="preco" placeholder="Preço do Carro">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Teto Solar"> Teto Solar
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Painel digital"> Painel Digital
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Direção elétrica"> Direção elétrica
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>