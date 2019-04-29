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
        $css_class = 'positive';
    } else {
        $css_class = 'negative';
    }
    
    $ataskaita[$index]['css_class'] = $css_class;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ataskaita</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .positive {
                color: green;
            }
            
            .negative {
                color: red;
            }
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