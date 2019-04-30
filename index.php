<?php

$gerimai = [
    [
        'name' => 'Vilkmerges Alus',
        'kaina' => 4.50,
        'nuolaida' => 0 //%
    ],
    [   
        'name' => 'Stumbro Degtinė',
        'kaina' => 8.50,
        'nuolaida' => 10 //%
    ],
    [
        'name' => 'Vynas_raudonas',
        'kaina' => 6.00,
        'nuolaida' => 0 //%
    ],
    [
        'name' => 'Vynas_baltas',
        'kaina' => 7.00,
        'nuolaida' => 20 //%
    ],
];

foreach ($gerimai as $index => $gerimas) {
    if ($gerimas['nuolaida'] > 0) {
        $gerimai[$index]['css_class'] = 'su_akcija';
        $kaina_su_nuolaida = $gerimai[$index]['kaina'] * (100 - $gerimas['nuolaida']) / 100;
        $gerimai[$index]['kaina_su_nuolaida'] = $kaina_su_nuolaida;
    } else {
       $gerimai[$index]['css_class'] = 'be_akcijos';
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .su_akcija {
                font-size: 20px;
            }
            
            .su_akcija .kaina {
                text-decoration: line-through;
            }
            
            .be_akcijos {
                font-size: 12px;
            }
        </style>
</head>
<body>
    <ul>
        <?php foreach ($gerimai as $gerimas): ?>
            <li class="<?php print $gerimas['css_class']; ?>">
                <span><?php print $gerimas['name']; ?></span>
                <?php if (isset ($gerimas['kaina_su_nuolaida'])): ?>
                <span><?php print $gerimas['kaina_su_nuolaida']; ?></span>
                <?php endif; ?>
                <span class="kaina"><?php print $gerimas['kaina']; ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>