<?php

$kates = rand(1, 3);
$sunys = rand(1, 3);

$katasuniai = 0;

for ($k = 1; $k <= $kates; $k++) {
    for ($s = 1; $s <= $sunys; $s++) {
        $success = rand(0, 1);
        
        if ($success) {
            $katasuniai++;
            break;
        }
    }
}

print "Event`e dalyvavo $kates kates ir $sunys sunys.<br>"
        . "Katasuniu iseiga: $katasuniai";
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