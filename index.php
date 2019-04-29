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

$visos_islaidos = 0;
$visos_iplaukos = 0;
$balansas = 0;

foreach ($ataskaita as $index => $irasas) {
    if ($irasas['amount'] > 0) {
        $visos_iplaukos += $irasas['amount'];
        $css_class = 'positive';
    } else {
        $visos_islaidos -= $irasas['amount'];
        $css_class = 'negative';
    }
    
    $ataskaita[$index]['burokas'] = $css_class;
    $balansas += $irasas['amount'];
}

$text = "balansas: $balansas eur";
$text1 = "visos įplaukos: $visos_iplaukos eur";
$text2 = "visos išlaidos: $visos_islaidos eur";

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
                <li class="<?php print $irasas['burokas']; ?>">
                    <span><?php print $irasas['name']; ?></span>
                    <span><?php print $irasas['amount']; ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
        <ul>
            <li><?php print $text; ?></li>
            <li><?php print $text1; ?></li>
            <li><?php print $text2; ?></li>
        </ul>
    </body>
</html>