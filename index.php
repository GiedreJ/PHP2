<?php

$car_price_new = 30000;
$car_price = $car_price_new;
$santaupos = 2000;

for ($months = 1;  $car_price >= $santaupos; $months++) {
    $car_price -= round($car_price*0.02);
    print "$months mėnesį mašinos vertė yra $car_price" . '<br>'; 
}

$depreciated = 100-( $car_price * 100 / $car_price_new);
$likutis = $car_price - $santaupos;
$text = "Po 24 mėnesių, mašios vertė bus $car_price. <br> Nuvertėjo $depreciated procentų.";
$text1 = "Po $months mėnesių, mašinos vertė bus $car_price." . '<br>' . "Nusipirkus tau dar liks $likutis eur.";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>ciklai</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <p><?php print $text1;?></p>
    </body>
</html>