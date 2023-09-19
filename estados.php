<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <?php
    
    $n = isset($_GET["n"])?$_GET["n"]:"0";
    $op = isset($_GET["op"])?$_GET["op"]:"1";

    switch($op){
        case 1:
            echo "<h2>Região Norte</h2>";
            break;
        case 2:
            echo "<h2>Região Centro-Oeste</h2>";
            break;
        case 3:
            echo "<h2>Região Nortedeste</h2>";
            break;
        case 4:
            echo "<h2>Região Sudeste</h2>";
            break;
        case 5:
            echo "<h2>Região Sul</h2>";
        }
    ?>
    <a href="estados.html">Voltar</a>
</body>
</html>