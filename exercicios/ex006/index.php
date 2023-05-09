<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex006 em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php
    // Capturando os dados do formulário retroalimentado

    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;

     
   ?>
    <main>
    <form action="<?php echo $_SERVER ['PHP_SELF'] ?>" method="get">
        <label for="v1">Valor 1</label>
        <input type="number" name="n1" id="n1" value="<?=$valor1?>">
        <label for="v2">Valor 2</label>
        <input type="number" name="n2" id="n2" value="<?=$valor2?>">
        <input type="submit" value="Calcular" >
    </form>



    </main>    

 
</body>
</html> 