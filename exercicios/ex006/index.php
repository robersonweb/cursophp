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

        // $valor1 = $_REQUEST['v1'] ?? 0;
        // $valor2 = $_REQUEST['v2'] ?? 0;
        $valor1 = 50;
        $valor2 = 20;
        
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?php echo $_SERVER ['PHP_SELF'] ?>" method="POST">
            <label for="v1">Valor 1</label>
            <input type="number" name="n1" id="n1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="n2" id="n2" value="<?=$valor2?>">
            <input type="submit" value="Calcular" >
        </form>
    </main>
    <section>
        <h2>Resultado do Cálculo</h2>
        <?php
            $soma = $valor1 + $valor2;
            echo "<p>A soma é igual a $soma</p>";
        ?>

    </section>


        

 
</body>
</html> 