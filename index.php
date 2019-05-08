<?php

$skaicius = 1;

if (isset($_POST['action'])) {
    $skaicius += $_POST['action'];
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
                <span>Give it to me!</span>
                <button type="submit" name="action" value="<?php print $skaicius; ?>">
                    <?php print $skaicius; ?>
                </button>
            </label>
        </form>
    </body>
</html>