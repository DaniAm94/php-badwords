<?php

$paragraph = $_POST["paragraph"];
$par_length = strlen(trim($paragraph));
$word = $_POST["word"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Ecco il tuo paragrafo:</h3>
    <p><?= $paragraph?></p>
    <span>Lunghezza: <?= $par_length?></span>

    
</body>
</html>