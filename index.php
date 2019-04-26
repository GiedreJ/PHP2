<?php

$mano_atmintis = [
        'Penktadienis',
        'Paskaita',
        'Baras',
        'Viskis',
        'Alus',
        'Degtine',
        'Alus',
        'Pirmadienis',
        'Paskaita',
];

$random_flashback = rand(0, count($mano_atmintis) -1);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis5/6</title>
        <link rel="stylesheet" href="/include/normalise.css">
        <link rel="stylesheet" href="/include/grid.css">
        <link rel="stylesheet" href="/include/style.css">
    </head>
    <body>
        <h1>
            Kas buvo pirmadienį?
        </h1>
        <h2>
            Mano atmintis
        </h2>
        <h3>
            <?php print '#' . $random_flashback . ':' . ' ' . $mano_atmintis[$random_flashback]; ?>
        </h3>
        <p>
            <ul>
                <?php foreach($mano_atmintis as $value): ?>
                    <li> 
			<?php print ($value); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </p>
        
    </body>
</html>