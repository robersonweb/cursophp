<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 005</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_REQUEST["n"] ?? 0;

            echo "<p>Analisando o numero <strong>". number_format($num, 3, "," , ".") ."</strong> informado pelo usuário: <p>";

            $int = (int) $num ;
            $fran = $num - $int;
            echo "<ul><li> A parte inteira do número é <strong>". number_format($int, 0, ",", ".") ."</strong></li>";
            // echo "<ul><li> A parte inteira do número é <strong>$int</strong></li>"
            echo "<li> A parte francionária do número é <strong> ". number_format($fran, 3, ",", ".") ."</strong></li></UL>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>