<?php

$gerimai = [
    [
        'name' => 'Vilkmerges alus',
        'kaina' => 4.50,
        'nuolaida' => 0
    ],
    [
        'name' => 'Stumbro degtine',
        'kaina' => 8.50,
        'nuolaida' => 10
    ],
    [
        'name' => 'Svyturio alus',
        'kaina' => 3.50,
        'nuolaida' => 15
    ],
    [
        'name' => 'Zemaitijos pienas',
        'kaina' => 1.50,
        'nuolaida' => 30
    ],
];

foreach ($gerimai as $index => &$gerimas) {
    //$gerimai[$index]['css_class'] = 'dfkasdf';
    
    if ($gerimas['nuolaida'] > 0) {
        $gerimas['css_class'] = 'big_font';
    } else {
        $gerimas['css_class'] = 'small_font';
    }
}

unset($gerimas);

var_dump($gerimai);