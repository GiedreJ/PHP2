<?php
/**
 * @return array 3x3 random array
 */
function slot_run()
{
    $array = [
        [rand(0, 1), rand(0, 1), rand(0, 1)],
        [rand(0, 1), rand(0, 1), rand(0, 1)],
        [rand(0, 1), rand(0, 1), rand(0, 1)]
    ];
    return $array;
}

$array1 = slot_run();

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