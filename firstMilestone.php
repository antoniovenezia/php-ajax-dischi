<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente 
i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Milestone</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">

    <?php

    require __DIR__ . '/arrayDischi.php';
    // $item => $disco['title'] . '<br>' . $disco['genre'] . '<br>' . $disco['year'];
    foreach($database as $disco){
    echo "<div class=\"item\" style='background-image: url(\"{$disco['poster']}\")'><h1>{$disco['title']}</h1><br> <h3>{$disco['genre']}</h3><br> <h3>{$disco['year']}</h3><br></div>";
    }

    ?>

</div>
    
</body>
</html>
