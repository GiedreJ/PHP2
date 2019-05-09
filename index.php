<?php

$result = 0;

if (isset($_POST['done'])) {
    $result = ++$_POST['done'];
}

$images = [];

for ($i = 0; $i < $result; $i++) {
    $images[$i] = 'banana.jpg';
}

?>
<!DOCTYPE html> 
<html> 
    <head> 
        <title>Bananas</title> 
        <meta charset="utf-8"> 
    </head> 
    <body>
        <form method="post">
            <input type="submit" name="done" value="<?php print $result ?>">
        </form>
        <?php foreach ($images as $i): ?>
            <img src="<?php print $i; ?>">
        <?php endforeach; ?>
    </body> 
</html> 