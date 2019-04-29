<?php

$zodziai = [
    'Petras',
    'laukė',
    'ryte',
    'prie',
    'Maxima',
];

$atrinkti_zodiai = [];

foreach ($zodziai as $zodis) {
    $pateko = rand (0, 1);
    if ($pateko) {
        $atrinkti_zodziai[] = $zodis;
    }
}



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Random zodziai</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text_balance/css" href="style.css">
    </head>
    <body>
        <ul>
            <?php foreach ($atrinkti_zodziai as $zodis): ?>
                <li>
                    <?php print $zodis; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>