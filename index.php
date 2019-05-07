<?php


$sheep = ['miau'];

for ($x = 0; $x < 5; $x++){
    $sheep[] = &$sheep[$x];
}

var_dump($sheep);

foreach ($sheep as $key => $value) {
    unset($sheep[$key]);
    $sheep[$key] = $value;
}

$sheep[3] = 'aaaa';

var_dump($sheep[3]);
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>   
        </style>        
    </head>
    <body>    
    </body>
</html>