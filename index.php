<?php

$css_class = 'pzda-level-' . rand(1, 4);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klasės darbas, 05.02</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            .pzdamat div {
                display: inline-block;
            }
            
            .pzdamat div span {
                display: none;
            }
            
            .lygis-0 {
                width: 50px;
                height: 50px;
                background: green;
                border-radius: 50%;
            }
            
            .staciakampis {
                background: gray;
                width: 100px;
                height: 50px;
            }
            
            .pzda-level-1 .lygis-1 {
                background: green;
            }
            
            .pzda-level-1 .lygis-1 span {
                display: inline-block;
            }
            
            .pzda-level-2 .lygis-1 {
                background: green;
            }             
            
            .pzda-level-2 .lygis-2 {
                background: green;
            }            
        </style>        
    </head>
    <body>
        <div class="pzdamat pzda-level-2">
            <div class="lygis-0"></div>
            <div class="lygis-1 staciakampis"><span>PX</span></div>
            <div class="lygis-2 staciakampis"><span>BL</span></div>
            <div class="lygis-3 staciakampis"><span>NX</span></div>
            <div class="lygis-4 staciakampis"><span>PZDA</span></div>
        </div>
    </body>
</html>

