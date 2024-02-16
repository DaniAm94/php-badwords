<?php

$paragraph = $_POST["paragraph"];
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
    <h3>Ecco la tua parola:</h3>
    <span><?= $word?></span>

    
</body>
</html>