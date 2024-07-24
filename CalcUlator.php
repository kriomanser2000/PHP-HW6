<?php
function calculate($num1, $num2, $operation)
{
    switch ($operation)
    {
        case "add":
            return $num1 + $num2;
        case "subtract":
            return $num1 - $num2;
        case "multiply":
            return $num1 * $num2;
        case "divide":
            if ($num2 == 0)
            {
                return "Error";
            }
            return $num1 / $num2;
        default:
            return "Error";
    }
}
echo calculate(10, 5, 'add');
echo calculate(10, 5, 'subtract');
echo calculate(10, 5, 'multiply');
echo calculate(10, 0, 'divide');
echo calculate(10, 5, 'divide');
echo calculate(10, 5, 'unknown');