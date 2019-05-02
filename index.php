<?php
/**
 * 
 * @return array
 */
function tekstas($text) {
    if (mb_strlen($text) <= 100) {
        return $text;
    }
        return mb_strcut($text, 0, 97) . '...'; 
}

$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."; 
print tekstas($text) . '<br>';
        
?>     
<!DOCTYPE html>
<html>
    <head>
        <title>3 X 3</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">       
    </head>
    <body>
    </body>
</html>