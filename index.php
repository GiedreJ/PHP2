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
        $gerimai[$index]['kaina'] *= (100 - $gerimai[$index]['nuolaida']) / 100;
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
            };
            
            .be_akcijos {
                font-size: 12px;
            }
        </style>
</head>
<body>
    <ul>
        <?php foreach ($gerimai as $index => $gerimas): ?>
            <li class="<?php print $gerimas['css_class']; ?>">
                <span><?php print $gerimas['name']; ?></span>
                <span><?php print $gerimas['kaina']; ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>