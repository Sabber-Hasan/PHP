<?php
$color =["red", "orange", "yellow", "green", "blue", "indigo", "violet", "pink", "brown", "gray", "black", "white"];
$dynamic =rand(0,count($color)-1);
// $dynamic =rand(0,2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        
        background-color:<?php echo $color[$dynamic];?>
        }
    </style>
</head>
<body>
    
</body>
</html>