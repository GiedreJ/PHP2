<?php
/**
 * Generuoja dinaminę matricą;
 * @param integr $size Matricos dydis;
 * @return array;
 */
function slot_run($size) {
    $array = [];
    for ($a = 0; $a < $size ; $a++) {
        $row = [];
        for ($b = 0; $b < $size; $b++) {
            $row[] = rand(0, 1);
        }
        $array[] = $row;
    } 
    return $array;
}

function winning_slot($matrix){
    $winning_rows = [];
    
    foreach ($matrix as $index => $row){
        $row_winning_sum = count($row);
        $column_sum = 0;
        
        foreach ($row as $column){
            $column_sum += $column;    
        } 
        if ($row_winning_sum == $column_sum){
            $winning_rows[] = $index; 
        }
        if ($column_sum == 0){
            $winning_rows[] = $index; 
        }
    }
    
    return $winning_rows;
} 

$size = rand(1, 10);
$array = slot_run($size);

$winning_rows = winning_slot($array);
var_dump($winning_rows);



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1">
    <title>Kvadrateliai</title>
    <style>
        section {
        display: flex;
        justify-content: center;
        align-items: baseline;
}

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
    <?php foreach ($array as $index): ?>
    <section>
        <?php foreach ($index as $value): ?>
            <?php if ($value): ?>
                <div class="blue"></div>
            <?php else: ?>
                <div class="orange"></div>
            <?php endif; ?>
        <?php endforeach; ?>
     </section>
    <?php endforeach; ?>
</body>
</html>