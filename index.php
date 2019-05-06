<?php

// randomizuoja pz2a lygį
$randomise = rand(0,4);

// Visų galimų istorijų sąrašas
$istorijos = [
    'nieko' => [
        'prasidėjo diena'
    ],
    'px' => [
        'nesuskambėjo žadintuvas',
        'skauda galvą',
        'nėra kavos',
        'mano eilė vedžioti šunį'
    ],
    'bl' => [
        'sudužo telefonas',
        'nesikuria mašina',
        'rytinis kamštis > 100km'
    ],
    'nx' => [
        'neveikia php',
        'nėra чумак',
        'nėra grikių',
    ],
    'pz2a' => [
        'pasirodo reikėjo \'empty cache\'',
        'įpushinau į master branch'
    ]
];

/**
 * 
 * @param type $random_integer
 * @param type $istorijos
 * @return type array
 */
function listas($random_integer, $istorijos) {
    $listas = [];
    
    if ($random_integer == 0 || $random_integer > 0) {
        $listas[0]['story'] = $istorijos['nieko'][0];
        $listas[0]['text_color'] = 'text-green';
    }
    if ($random_integer > 0) {
        $listas[1]['story'] = $istorijos['px'][rand(0, count($istorijos['px']) - 1)];
        $listas[1]['text_color'] = 'text-green';
        $listas[1]['css_color'] = 'green';
        $listas[1]['meter_text'] = 'PX';
    }
    if ($random_integer > 1) {
        $listas[2]['story'] = $istorijos['bl'][rand(0, count($istorijos['bl']) - 1)];
        $listas[2]['text_color'] = 'text-yellow';
        $listas[2]['css_color'] = 'yellow';
        $listas[2]['meter_text'] = 'BL';
    }
    if ($random_integer > 2) {
        $listas[3]['story'] = $istorijos['nx'][rand(0, count($istorijos['nx']) - 1)];
        $listas[3]['text_color'] = 'text-orange';
        $listas[3]['css_color'] = 'orange';
        $listas[3]['meter_text'] = 'NX';
    }
    if ($random_integer > 3) {
        $listas[4]['story'] = $istorijos['pz2a'][rand(0, count($istorijos['pz2a']) - 1)];
        $listas[4]['text_color'] = 'text-red';
        $listas[4]['css_color'] = 'red';
        $listas[4]['meter_text'] = 'PZ2A';
    }
    return $listas;
}

/**
 * Level meter
 * @param type $feedme
 * @return type integer or string
 */
function level($feedme) {
    if ((count($feedme) - 1) < 4) {
        return $level = count($feedme) - 1;
    } else {
        return $level = '!!MAX!!!';
    }
}

$sugeneruotas_listas = listas($randomise, $istorijos);
$level = level($sugeneruotas_listas);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PZ2A-MAT</title>
        <link rel="stylesheet" type="text/css" href="include/normalise.css">
        <link rel="stylesheet" type="text/css" href="include/style.css">
    </head>
    <body>
        <div class="termometras">
            <div class="apskritimas green">
                <span><?php print $level; ?></span>
            </div>
            <div class="square <?php print $sugeneruotas_listas[1]['css_color']; ?>">
                <span><?php print $sugeneruotas_listas[1]['meter_text']; ?></span>
            </div>
            <div class="square <?php print $sugeneruotas_listas[2]['css_color']; ?>">
                <span><?php print $sugeneruotas_listas[2]['meter_text']; ?></span>
            </div>
            <div class="square <?php print $sugeneruotas_listas[3]['css_color']; ?>">
                <span><?php print $sugeneruotas_listas[3]['meter_text']; ?></span>
            </div>
            <div class="square <?php print $sugeneruotas_listas[4]['css_color']; ?>">
                <span><?php print $sugeneruotas_listas[4]['meter_text']; ?></span>
            </div>
        </div>
        <div class="list">
            <ul>
                <?php foreach ($sugeneruotas_listas as $index): ?>
                <li>
                    <span class="<?php print $index['text_color']; ?>">
                        <?php print $index['story']; ?>
                    </span>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </body>
</html>
