<?php

//$days = 365;
$cizos_mon_thu = date("N");
$cizos_fri = rand(10, 20);
$cizos_sat_sun = rand(1, 5);
$pakelio_kaina = 3.40;
$surukyta = 0;

for ($day = 1; $day < 365; $day++){
  $weekday = date('N', strtotime("+$day days"));

  if ($weekday <= 4){
      $cizos_mon_thu = rand(3, 4); // Nuo pirmadienio iki ketvirtadienio
      $surukyta += $cizos_mon_thu; // Kiek sur?kiau iki ketvirtadienio
      print "$surukyta<br>";
  } elseif ($weekday == 5){
      $cizos_fri = rand(10, 20);
      $surukyta += $cizos_fri;
  } else {
      $cizos_sat_sun = rand(1, 3);
      $surukyta += $cizos_sat_sun;
  }
}

$text = "Visos surukytos cizos (vnt) $surukyta";

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