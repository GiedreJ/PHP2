<?php

$rasinys = [];
$rasinio_ilgis = rand(100, 300);
$zodziai = [
    'jonas', 'dviratis', 'laukas', 'bėga', 'krenta', 'alus',
];

for ($x = 0; $x < $rasinio_ilgis; $x++) {
    $random_index = rand(0, count($zodziai) -1);
    $random_zodis = $zodziai[$random_index];
    $rasinys[] = $random_zodis;
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rasinys</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text_balance/css" href="style.css">
    </head>
    <body>
            <?php foreach ($rasinys as $zodis): ?>
                <span><?php print $zodis; ?></span>
            <?php endforeach; ?>
    </body>
</html>