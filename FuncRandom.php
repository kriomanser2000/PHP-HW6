<?php
function generateRandomColor()
{
    $hex = '#';
    for ($i = 0; $i < 6; $i++)
    {
        $hex .= dechex(mt_rand(0, 15));
    }
    return $hex;
}
$randomColor = generateRandomColor();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    div
    {
        width: 100px;
        height: 100px;
        background-color: <?php echo $randomColor; ?>;
    }
</style>
<body>
<div></div>
<p>Випадковий колір: <?php echo $randomColor; ?></p>
</body>
</html>