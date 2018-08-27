<?php
// DEFINITION DU SETLOCALE QUI VA PERMETTRE DE RETOURNER LA DATE A L'HEURE FRANCAISE 
    setlocale(LC_ALL, 'fr_FR.UTF-8');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ex3</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <p>
            <?=
    // AFFICHAGE DE LA DATE AU FORMAT SOUHAITÉ
                strftime("%A %e %B %Y");
            ?>
        </p>
    </body>
</html>
