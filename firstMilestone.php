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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>
<div class="bg-container">

    <div class="container-topbar row justify-content-end">
        <div><img class="img-topbar" src="img/spotify-logo.png" alt=""></div>
    </div>

    <div class="container-main row justify-content-center">

    <?php
    require __DIR__ . '/arrayDischi.php';
    foreach($database as $disco){
        echo "<div class=\"item\">
            <img src=\"{$disco['poster']}\">
            <h4>{$disco['title']}</h4>
            <h5>{$disco['genre']}</h5> 
            <h5>{$disco['year']}</h5>
            </div>";
    }
    ?>

    </div>


</div>
    
</body>
</html>
