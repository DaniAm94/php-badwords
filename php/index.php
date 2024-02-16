<?php

// Prende il paragrafo inviato dal form in index.html
$paragraph = $_POST["paragraph"];
// Calcolo la lunghezza dopo aver tolto spazi bianchi a inizio e fine
$par_length = strlen(trim($paragraph));
// Prende la parola inviata dal form in index.html
$word = $_POST["word"];
// Rimpiazza tutte le occorrenze della parola all'intenro del paragrafo con '***'
$censored_par = str_replace($word, '***', trim($paragraph));
// Calcola la lunghezza del nuovo paragrafo censurato
$censored_par_length= strlen($censored_par);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php badwords page 2</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css'
        integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=='
        crossorigin='anonymous' />
</head>
<body>
<div class="container-sm vh-100 d-flex flex-column  justify-content-center">

    <h3>Ecco il tuo paragrafo:</h3>
    <p><?= $paragraph?></p>
    <h5>Lunghezza: <?= $par_length?></h5>
    <hr>
    <h3>Paragrafo con parola censurata: </h3>
    <p><?= $censored_par?></p>
    <h5>Lunghezza: <?= $censored_par_length?></h5>
    <h3>La parola censurata: <?= $word?></h3>
</div>

    
</body>
</html>