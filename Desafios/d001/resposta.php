<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 0;
                $a = $n - 1;
                $s = $n + 1;
                echo "O número escolhido foi <strong>$n</strong>";
                echo "<br>O seu antecessor é $a";
                echo "<br>O seu sucessor é $a";


            ?>

        </p>
        <button onclick="javascript:history
        .go(-1)">Voltar</button>
        <!-- <button onclick="javascript:window.location.href
        'index.html'">&#x2b05; Voltar</button> -->
    </main>
    
</body>
</html>