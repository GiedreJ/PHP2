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
        $ataskaita[$index]['css_class'] = 'positive';
    } else {
        $visos_islaidos -= $irasas['amount'];
        $ataskaita[$index]['css_class'] = 'negative';
    }

    $balansas += $irasas['amount'];
}

$text_balance = "balansas: $balansas eur.";
$text_spend = "visos islaidos: $visos_islaidos eur.";
$text_earn = "visos iplaukos: $visos_iplaukos eur.";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ataskaita</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text_balance/css" href="style.css">
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
        <ul>
            <li><?php print $text_balance; ?></li>
            <li><?php print $text_spend; ?></li>
            <li><?php print $text_earn; ?></li>
        </ul>
    </body>
</html>