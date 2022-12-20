<?php
    if(isset($_FILES)){

        print_r($_FILES); //Array ( [imagem] => Array ( [name] => README.md [full_path] => README.md [type] => application/octet-stream [tmp_name] => C:\Users\TSA\AppData\Local\Temp\php22DF.tmp [error] => 0 [size] => 326 ) )
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
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <input type="file" name="imagem">
        </div>
        <div>
            <input type="submit" value="enviar">
        </div>
    </form>
</body>
</html>