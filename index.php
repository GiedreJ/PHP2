<?php

$daiktai = [
    [
        'name' => 'Kremas',
        'size' => '5',
        'color' => 'tamsus',
    ],
    [   
        'name' => 'Riešutai',
        'size' => '10',
        'color' => 'šviesus',
    ],
    [
        'name' => 'Raktai',
        'size' => '11',
        'color' => 'tamsus',   
    ],
    [
        'name' => 'Telefonas',
        'size' => '15',
        'color' => 'tamsus',
    ],
    [
        'name' => 'Lūpdažis',
        'size' => '6',
        'color' => 'šviesus',
    ],
    [
        'name' => 'Vaistai',
        'size' => '80',
        'color' => 'tamsus',
    ],
    [
        'name' => 'Kojinės',
        'size' => '6',
        'color' => 'šviesus',
    ],
];

$random_name = $daiktai[rand(0, count($daiktai) -1)];

$name = $random_name['name'];

$size = $random_name['size'];

$color = $random_name['color'];

$text = "$name užima $size cm3. Daiktas $color."


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
    <style></style>
</head>
<body>
    <p>
        <?php print $text ?>
    </p>
</body>
</html>