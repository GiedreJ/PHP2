<?php

$x = 0;

function change_x(&$x) {
    $x = 1;
};

change_x($x);
print $x;

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