<?php
function calculateArea($width, $height) {
    return $width * $height;
}

$width = 12;
$height = 6;
$area = calculateArea($width, $height);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculate Area</title>
</head>
<body>
    <p><b>The area of a rectangle with a width of <?= $width ?> and <?= $height ?> is <?= $area ?><b></p>
</body>
</html>
