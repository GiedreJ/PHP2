<?php

function Vynas_alus($gender, $age){
    if($age >= 20) {
        if ($gender == 'male') {
            print 'Alus';
        } else {
            print 'Vynas';
        }
    }
};

Vynas_alus('female', 20)

?> 