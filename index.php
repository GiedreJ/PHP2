<?php

/**
 * Kintamojo kelimas kvadratu
 * @param integer $x
 * @return integer
 */
function square($x) {
    return $x ** 2;
}

// Sąlyga inputo langui.
if (!empty($_POST)) {
    if ($_POST['action'] == 'pakelti') {
        $message = 'Atsakymas: ' . square($_POST['skaicius']);
    } elseif(($_POST['action'] == 'saknis')) {
        $message = 'Atsakymas: ' . sqrt($_POST['skaicius']);
    }
} else {
    $message = 'Įvesk skaičių!';
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Basics</title>
    </head>
    <body>
        <form method="POST">
            <label>
                <span> Ką pakelti kvadratu:</span>
                <input type="number" name="skaicius">
            </label>
            
            <button name="action" value="pakelti">Bandom kvadarata!</button>      
            <button name="action" value="saknis">Bandom sakni!</button>      
            <input type="reset">
        </form>
        <p><?php print $message; ?></p>
    </body>
</html>