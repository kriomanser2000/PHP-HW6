<?php
function createHtmlElement($tagName, $className)
{
    $safeTagName = htmlspecialchars($tagName, ENT_QUOTES, 'UTF-8');
    $safeClassName = htmlspecialchars($className, ENT_QUOTES, 'UTF-8');
    echo "<$safeTagName class=\"$safeClassName\"></$safeTagName>";
}
createHtmlElement('p', 'text-class');
createHtmlElement('span', 'highlight');
createHtmlElement('section', 'content-section');
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
<body>
<p class="text-class">Sasa HW Php</p>
<span class="highlight">HW Php Sasa</span>
<section class="content-section">Php Sasa HW</section>
</body>
</html>
