<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente 
i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

<?php

require __DIR__ 'arrayDischi.php';

foreach($database as $disco){
    echo $disco['title'] . '<br>' . $disco['genre'] . '<br>' . $disco['year'] . '<br>';
}
    

?>