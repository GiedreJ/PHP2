<?php

$array = ['b', 'x', 'x', 'b', 's'];

function count_values($array, $val) {
    $atrinktieji = 0;
    
    foreach ($array as $value) {
        if ($value == $val) {
            $atrinktieji++;
        }
    }
    return $atrinktieji;
}

print count_values($array, 's');


function change_values(&$array, $val_from, $val_to) {
    
   foreach ($array as &$value) {
       if ($value == $val_from) {
         $value = $val_to;
   }
}
}

change_values($array, 'x', 'y');
var_dump($array);


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