<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $dividendo = $_GET['d1'] ?? 0;
        $divisor = $GET['d2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="" method="get"></form>
        <label for="d1">Dividendo</label>
        <input type="number" name="d1" id="d1" value="<?=$dividendo?>">
        <label for="d2">Divisor</label>
        <input type="number" name="d2" id="d2" value="<?=$divisor?>">
        <input type="submit" value="Calcular">

    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
        
        ?>
    </section>
</body>
</html>