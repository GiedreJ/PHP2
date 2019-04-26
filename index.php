<?php
$draugo_atmintis = [
    'Penktadienis',
    'Paskaita',
    'Alus',
    'Dar vienas alutis',
    'Tualetas',
    'Cigarete',
    'Alutis',
    'Sokiai',
];

$mano_atmintis = [
    'Penktadienis',
    'Paskaita',
    'Baras',
    'Viskis',
    'Alus',
    'Degtine',
    'Alus',
    'Cigarete',
    'Pirmadienis',
    'Paskaita'
];

$bendra_atmintis = [];

$rand_flashback_mano = rand(0, count($mano_atmintis) - 1);
$flashback_text = '#' . $rand_flashback_mano . ': ' . $mano_atmintis[$rand_flashback_mano];
$rand_flashback_draugo = rand(0, count($draugo_atmintis) - 1);
$flashback_text_draugo = '#' . $rand_flashback_draugo . ': ' . $draugo_atmintis[$rand_flashback_draugo];


foreach ($mano_atmintis as $prisiminimas) {
    $egzistuoja = in_array($prisiminimas, $draugo_atmintis);
    if ($egzistuoja) {
        $bendra_atmintis[] = $prisiminimas;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klases darbas, 5-tadienis</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Kas buvo penktadienį ?!</h1>
        <h2>Mano atmintis</h2>
        <ul> 
            <!-- foreach -->
            <?php foreach ($mano_atmintis as $value): ?>
                <li>
                    <?php print $value; ?>
                </li>
            <?php endforeach; ?>
            <!-- endforeach -->                
        </ul>

        <!-- Flashback is random each page refresh -->     
        <p><?php print $flashback_text; ?></p>
        <h2>Draugo atmintis</h2>
        <ul>
            <!-- foreach -->
            <?php foreach ($draugo_atmintis as $value): ?>
                <li>
                    <?php print $value; ?>
                </li>
            <?php endforeach; ?>
            <!-- endforeach -->
        </ul>
        <p><?php print $flashback_text_draugo; ?></p>

        <h2>Bendra atmintis</h2>
        <ul>
            <!-- foreach -->
            <?php foreach ($bendra_atmintis as $prisiminimas): ?>
                <li>
                    <?php print $prisiminimas; ?>
                </li>
            <?php endforeach; ?>
            <!-- endforeach -->
        </ul>
    </body>
</html>