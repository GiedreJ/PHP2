<?php

function square($x) {
    return $x**2;
}

if (isset($_POST['enter']) && !empty($_POST['kvadratu'])) {
    $atsakymas = 'Atsakymas:' . square($_POST['kvadratu']);
}   else {
    $atsakymas = 'Įveskite skaičių';   
}

var_dump($_POST);
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
        <form method="POST">
            <label>
            <span>Ką pakelti kvadratu:</span> 
            <input name="kvadratu" type="number"/>
            </label>
            <input name="enter" type="submit"/>
            <input type="reset"/>
        </form>
        <p><?php print $atsakymas; ?></p>
    </body>
</html>