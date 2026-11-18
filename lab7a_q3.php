<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 7a q3</title>
</head>

<body>
    <?php
    function calculateArea($width, $length)
    {
        return $width * $length;
    }

    $width = 4;
    $length = 2;
    $area = calculateArea($width, $length);

    echo "<b>The area of a rectangle with a width of $width and $length is $area</b>";
    ?>
</body>

</html>