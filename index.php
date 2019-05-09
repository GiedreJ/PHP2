<?php

$vardas = '';
$pavarde = '';
$amzius = '';
$lygis = '';

if (!empty($_POST['vardas']) && !empty($_POST['pavarde'])) {
    $vardas = $_POST['vardas'];
    $pavarde = $_POST['pavarde'];
    $amzius = $_POST['amzius'];
    $lygis = $_POST['lygis'];
}

?>
<html>
<head></head>
<body>
<form method="post">
    <input type="text" name="vardas" placeholder="vardas" required>
    <input type="text" name="pavarde" placeholder="pavarde" required>
    <input type="number" name="amzius" placeholder="amzius" min="18" max="99">
    <select name="lygis">
        <option value="pazenges" name="pazenges">pazenges</option>
        <option value="profesionalas" name="profesionalas">profesionalas</option>
        <option value="pradedantysis" name="pradedantysis" selected>pradedantysis</option>
    </select>
    <button name="button" value="push">Siusti</button>
</form>
<h1>Vardas: <?php print $vardas; ?></h1>
<h1>Pavarde: <?php print $pavarde; ?></h1>
<h1>Amzius: <?php print $amzius; ?></h1>
<h1>Lygis: <?php print $lygis?></h1>
</body>
</html>