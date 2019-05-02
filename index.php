<?php
function god() {
    print 'Vynelis Putojantis';
}

god();



function px_to_color($length) {
    if ($length > 30) {
        print 'Black';
    } else {
        print 'White';
    }
}

px_to_color(18.5);


/**
 * sumuoja x ir y 
 * @param type $x Pirma verte
 * @param type $y Antra verte
 * @return type integer
 */
function sum($x, $y) {
    return $x + $y;
}
$suma = sum(10, 20);
print sum(10, 20);
