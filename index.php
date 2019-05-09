<?php

$hack = filter_input_array(INPUT_POST, [
    'hack_me' => FILTER_SANITIZE_SPECIAL_CHARS,
]);

/**
 * <style>form {display: none;}</style>
    <!--
 */
var_dump($hack);
$input = $hack['hack_me'];
?>
<html>
    <body>
        <h1><?php print $input; ?></h1>
        <form method="post">
            <input type="text" name="hack_me" placeholder="Hack Me" required>
            <button name="button" value="push">Try</button>
        </form>
    </body>
</html>