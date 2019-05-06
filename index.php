<?php

function suma($a, $b, $c) {
    return $a + $b + $c;
}

print suma(5, 2, 1);

function duok($arrayKey, $colorKey){

    $array = [
        'labas',
        'krabas',
        'matas',
    ];

    $color = [
        'melyna',
        'raudona',
        'ruda',
    ];

    foreach ($array as $key => $value){
        $tekstas =  $array[$arrayKey];
    }

    foreach ($color as $key => $value){
        $spalva =  $color[$colorKey];
    }
    return $tekstas . ' ' . $spalva;
}

print duok(1,1);

?>
?>