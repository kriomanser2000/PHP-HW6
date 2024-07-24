<?php
function buildMenu($menuItems)
{
    $menuHtml = '<ul class="menu">';
    foreach ($menuItems as $item)
    {
        $text = htmlspecialchars($item['text'], ENT_QUOTES, 'UTF-8');
        $class = htmlspecialchars($item['class'], ENT_QUOTES, 'UTF-8');
        $menuHtml .= '<li class="' . $class . '">' . $text . '</li>';
    }
    $menuHtml .= '</ul>';
    return $menuHtml;
}
$menuItems =
    [
    ['text' => 'Home', 'class' => 'home'],
    ['text' => 'About', 'class' => 'about'],
    ['text' => 'Contact', 'class' => 'contact']
];
echo buildMenu($menuItems);