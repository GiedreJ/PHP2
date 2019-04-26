<?php

$parkingas = [
    'bmw' => 'Vytenis', // 1 vieta
    'toyota' => 'Jonas', // 2 vieta
    'citroen' => 'Jone', // 3 vieta   
];

var_dump($parkingas);

$parkingo_vietos = array_keys($parkingas);

var_dump($parkingo_vietos);

// opel
$parkingas_2_vieta = $parkingo_vietos[1];

var_dump("Parkingas 2 vieta: $parkingas_2_vieta");

//$parkingas['opel'] 
print $parkingas[$parkingas_2_vieta];

           
//var_dump($array);
var_dump(array_keys($parkingas));

Collapse



