<?php

function slot_run() {
    $array = [];
    for ($a = 1; $a <= 5; $a++) {
        $row = [];
        for ($b = 1; $b <= 5; $b++) {
            $row[] = rand(0, 1);
        }
        $array[] = $row;
    } 
    return $array;
}

var_dump(slot_run());
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kvadrateliai</title>
    <style>
        div {
        border: 3px solid black;
        padding: 10px;
        margin: 10px;
}
section {
        display: flex;
        justify-content: center;
        align-items: baseline;
}
.blue {
        background-color: blue;
}
.orange {
        background-color: orange;
}
    </style>
</head>
<body>
<?php foreach ($array1 as $index): ?>
    <section>
        <?php foreach ($index as $value): ?>
            <?php if ($value > 0): ?>
                <div class="blue"></div>
            <?php else: ?>
                <div class="orange"></div>
            <?php endif; ?>
        <?php endforeach; ?>
    </section>
<?php endforeach; ?>
</body>
</html>