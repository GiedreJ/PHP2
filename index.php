<?php
$grikiai = 5000;
$grikiai_start = $grikiai;
$per_diena = rand(200, 500);
$survive_days = 0;
$praejo_dienu = "";

for (; $grikiai >= 500 ;) {
    $grikiai -= rand(200, 500);
    $praejo_dienu++;
    print "$praejo_dienu liks $grikiai" . '<br>';
}

$date = date('Y-M-d', strtotime("+$praejo_dienu days"));
$text = "Jei turėsiu $grikiai_start g. grikių, valgysiu juos $praejo_dienu dienų."
         . " Jei pradėsiu šiandien, grikiai baigsis $date data";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ciklai</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <p><?php print $text;?></p>
    </body>
</html>