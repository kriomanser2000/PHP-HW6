<?php
function drawChessboard($pieces)
{
    echo '<table border="1" cellpadding="5" cellspacing="0">';
    for ($i = 1; $i <= 8; $i++)
    {
        echo '<tr>';
        for ($j = 1; $j <= 8; $j++)
        {
            $color = ($i + $j) % 2 == 0 ? '#fff' : '#000';
            echo '<td style="width: 50px; height: 50px; text-align: center; background-color: ' . $color . ';">';
            $piece = '';
            foreach ($pieces as $p)
            {
                if ($p['row'] == $i && $p['col'] == $j)
                {
                    $piece = $p['piece'];
                    break;
                }
            }
            echo $piece;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
$pieces = [
    ['row' => 1, 'col' => 1, 'piece' => '♖'], //white
    ['row' => 1, 'col' => 2, 'piece' => '♘'], //white
    ['row' => 1, 'col' => 3, 'piece' => '♗'], //white
    ['row' => 1, 'col' => 4, 'piece' => '♕'], //white
    ['row' => 1, 'col' => 5, 'piece' => '♔'], //white
    ['row' => 1, 'col' => 6, 'piece' => '♗'], //white
    ['row' => 1, 'col' => 7, 'piece' => '♘'], //white
    ['row' => 1, 'col' => 8, 'piece' => '♖'], //white
    ['row' => 2, 'col' => 1, 'piece' => '♙'], //white
    ['row' => 2, 'col' => 2, 'piece' => '♙'], //white
    ['row' => 2, 'col' => 3, 'piece' => '♙'], //white
    ['row' => 2, 'col' => 4, 'piece' => '♙'], //white
    ['row' => 2, 'col' => 5, 'piece' => '♙'], //white
    ['row' => 2, 'col' => 6, 'piece' => '♙'], //white
    ['row' => 2, 'col' => 7, 'piece' => '♙'], //white
    ['row' => 2, 'col' => 8, 'piece' => '♙'], //white
    ['row' => 7, 'col' => 1, 'piece' => '♟'], //black
    ['row' => 7, 'col' => 2, 'piece' => '♟'], //black
    ['row' => 7, 'col' => 3, 'piece' => '♟'], //black
    ['row' => 7, 'col' => 4, 'piece' => '♟'], //black
    ['row' => 7, 'col' => 5, 'piece' => '♟'], //black
    ['row' => 7, 'col' => 6, 'piece' => '♟'], //black
    ['row' => 7, 'col' => 7, 'piece' => '♟'], //black
    ['row' => 7, 'col' => 8, 'piece' => '♟'], //black
    ['row' => 8, 'col' => 1, 'piece' => '♜'], //black
    ['row' => 8, 'col' => 2, 'piece' => '♞'], //black
    ['row' => 8, 'col' => 3, 'piece' => '♝'], //black
    ['row' => 8, 'col' => 4, 'piece' => '♛'], //black
    ['row' => 8, 'col' => 5, 'piece' => '♚'], //black
    ['row' => 8, 'col' => 6, 'piece' => '♝'], //black
    ['row' => 8, 'col' => 7, 'piece' => '♞'], //black
    ['row' => 8, 'col' => 8, 'piece' => '♜']  //black
];
drawChessboard($pieces);