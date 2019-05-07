<?php

$a = 'a';
$b = &$a;
$b = 'b';

print $a;
print $b;

$array = ['a', 'b'];

foreach ($array as &$value) {
    $value = 'c';
};

var_dump ($array);
print $value;

/** nauja funkcija */
$x = 2;

function rape_x(&$x) {
    $x = 3;
}

rape_x($x);
print $x;

/** nauja funkcija */
$a = 10;

function rape_x1(&$x) {
    $x = 5;
}

rape_x1($a);
print $a;


?>
<!DOCTYPE html>
<html>
    <head>
        <title>termometras</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
           
        </style>        
    </head>
    <body>
        
    </body>
</html>