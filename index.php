<?php

function amzius($amzius) {
if ($amzius < 0) {
    return 'klaida';
    }
if ($amzius < 18) {
    return 'nepilnametis';
    }
if ($amzius < 65) {
    return 'pilnametis';
    }    
    return 'pensininkas';
}

print amzius();

?>