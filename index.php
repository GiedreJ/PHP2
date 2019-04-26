<?php

$mano_atmintis = [
    'Penktadienis',
    'Paskaita',
    'Baras',
    'Viskis',
    'Alus',
    'Alus',
    'Alus',
    'Pirmadienis',
    'Paskaita'
];

$draugo_atmintis = [
    'Penktadienis',
    'Rytas',
    'Baras',
    'Viskis',
    'Alus',
    'Degtine',
    'Degtine',
    'Samagonas',
    'Antradienis'
];

$flashback_index = rand(0, count($mano_atmintis) - 1);
$flashback_num = $flashback_index + 1;
$flashback_text_mano = "#$flashback_num: {$mano_atmintis[$flashback_index]}";
$flashback_text_draugo = "#$flashback_num: {$draugo_atmintis[$flashback_index]}";

$bendri_atsiminimai = [];
foreach ($mano_atmintis as $prisiminimas) {
    $egzistuoja = in_array($prisiminimas, $draugo_atmintis);
    $dublikuojasi = in_array ($prisiminimas, $bendri_atsiminimai);
    if ($egzistuoja && !$dublikuojasi) {
        $bendri_atsiminimai[] = $prisiminimas;
    }
}
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PENKTADIENIS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Kas buvo penktadienį ?!</h1>
        <h2>Mano atmintis</h2>
        <ul> 
            <!-- foreach -->
            <?php foreach ($mano_atmintis as $prisiminimas): ?>
                <li> 
                    <?php print $prisiminimas; ?>
                </li>
            <?php endforeach; ?>
            <!-- endforeach -->
        </ul>
        <h3><?php print $flashback_text_mano; ?></h3>               
        <h2>Draugo Atmintis</h2>
        <ul> 
            <!-- foreach -->
            <?php foreach ($draugo_atmintis as $prisiminimas): ?>
                <li> 
                    <?php print $prisiminimas; ?>
                </li>
            <?php endforeach; ?>
            <!-- endforeach -->
        </ul>
        <h3><?php print $flashback_text_draugo; ?></h3>    
        <h3>Sutape prisiminimai:</h3>
        <ul> 
            <!-- foreach -->
            <?php foreach ($bendri_atsiminimai as $prisiminimas): ?>
                <li>
                    <?php print $prisiminimas; ?>
                </li>
            <?php endforeach; ?> 
            <!-- endforeach -->
        </ul>
    </body>
</html>