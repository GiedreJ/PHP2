<?php

$panos = [
        [
        'vardas' => 'Monika',
        'grazi' => true,
        'protinga' => false,
    ],
        [
        'vardas' => 'Greta',
        'grazi' => true,
        'protinga' => true,
    ],
        [
        'vardas' => 'Egle',
        'grazi' => false,
        'protinga' => false,
    ],
        [
        'vardas' => 'Agne',
        'grazi' => true,
        'protinga' => true,
    ]
];

var_dump($panos);


function vardai($names){
    return $names[rand(0, count($names) - 1)]['vardas'];
}
/**
function random_name($panos) {
    $random_index = rand(0, count($panos) -1);
    return $panos[$random_index]['vardas'];
}
var_dump($random_name($panos));
*/

function grazios_protingos($merginos) {
    $grazios_protingos = [];
    
    foreach ($merginos as $mergina) {
        if ($mergina['grazi'] && $mergina['protinga']) {
            $grazios_protingos[] = $mergina;
        }
    }
    
    return $grazios_protingos;
}

function kiek_graziu($merginos) {
    $kiek = 0;
    foreach ($merginos as $mergina) {

        if ($mergina['grazi']) {
            $kiek++;
        }
    }
    $kiek_is_viso = count($merginos);
    return $kiek / $kiek_is_viso * 100;
}

$kiek = kiek_graziu($panos);
var_dump($kiek);

$zmonos = grazios_protingos($panos);
var_dump($zmonos);
$random_mergina = vardai($panos);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klasės darbas, 05.06</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
        </style>        
    </head>
    <body>
    <ul>
        <?php foreach ($zmonos as $mergina): ?>
        <li>
            <?php print $mergina['vardas']; ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <p>
    <?php print $random_mergina; ?>
    </p>
    <h2>
        <?php print "Gražių panų $kiek %"; ?> 
    </h2>
    </body>
</html>

