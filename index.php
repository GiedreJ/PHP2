<?php

$months = 12;
$kisene = 1000;
$alga = 700;


for ($months = 1; $months <= 12; $months++) {
   $islaidos = rand(500, 900);
   $balansas = $kisene + $alga - $islaidos;
   print "balansas $balansas<br>";
   print "islaidos $islaidos<br>";
   if ($balansas <=500) {
       print "Bloga prognoze: $months gali baigtis pinigai! Atsargiai!<br>";
       break;
   } else {
       $kisene = $balansas;
   }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        
    </body>
</html>