<?php

$ataskaita = [
    [
        'name' => 'IKI Darbo Uzmokestis',
        'amount' => '600',
    ],
    [
        'name' => 'Kalvariju Nacnykas',
        'amount' => '-15',
    ],
    [
        'name' => 'Limonas',
        'amount' => '-120',
    ],
    [
        'name' => 'Vovkos garazas',
        'amount' => '-340',
    ],
];

foreach ($ataskaita as $index => $irasas) {
    if ($irasas['amount'] > 0) {
        $ataskaita[$index]['css_class'] = 'positive';
    } else {
        $ataskaita[$index]['css_class'] = 'negative';
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ataskaita</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .positive {color: green;}
            .negative {color: red;}
        </style>
    </head>
    <body>
        <ul>
            <?php foreach ($ataskaita as $irasas): ?>
                <li class="<?php print $irasas['css_class']; ?>">
                    <span><?php print $irasas['name']; ?></span>
                    <span><?php print $irasas['amount']; ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>