<?php
$pakelio_kaina = 3.75;
$surukyta = 0;
$surukyta2 = 0;
$rukymo_laikas = 5;
$viso_min = 0;

for ($day = 1; $day <= 365; $day++) {
   $weekday = date('N', strtotime("+$day days"));
   if ($weekday <= 4) {
       $cizos_mon_thu = rand(3, 4); // Nuo pirmadienio iki ketvirtadienio
       $surukyta += $cizos_mon_thu; // Kiek surūkiau iki ketvirtadienio
       $surukyta2 += $cizos_mon_thu; // Kiek surūkiau iki ketvirtadienio
       print $surukyta . 'surukyta 1-4' . '<br>';
       print $surukyta * 5 / 60 . 'valandu' . '<br><br>';
   } elseif ($weekday == 5) {
       $cizos_fri = rand(10, 20); // Penktadienis
       $surukyta += $cizos_fri; // Kiek surukiau per penktadieni
       print $surukyta . 'surukyta 5' . '<br>';
       print $surukyta * 5 / 60 . 'valandu' . '<br><br>';
   } else {
       $cizos_sat_sun = rand(1, 3); // Sestadienis-sek
       $surukyta += $cizos_sat_sun; // Kiek surukiau per sest-sek
       print $surukyta . 'surukyta 6-7' . '<br>';
       print $surukyta * 5 / 60 . 'valandu' . '<br><br>';
   }
   $viso_min = $surukyta * $rukymo_laikas;
}

$viso_hours = $viso_min / 60;
$kainuos2 = round($surukyta2 / 20 * 3.75);
$text2 = "Nerukydamas pirmadieni-ketvirtaideni sutaupyciau $kainuos2 eur.";
$kainuos = round($surukyta / 20 * 3.75);
$text = "Per metus surukysiu $surukyta cigareciu uz $kainuos eur.";
print "Per metus prastovėsiu traukdamas $viso_hours valandų."



?>

<html>
   <head>
       <title>main</title>
   </head>
   <body>
       <P>
           <?php print $text . ' ' . $text2;?>
       </P>
   </body>
</html>