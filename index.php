<?php

function suma($a, $b, $c) {
    return $a + $b + $c;
}

print suma(5, 2, 1);

function lyginisNelyginis($skaicius) {
    if ($skaicius % 2 ==0) {
        print 'lyginis';
    } else {
        print 'nelyginis';
    }
}
lyginisNelyginis(15);
lyginisNelyginis(2);
lyginisNelyginis(8);



?>