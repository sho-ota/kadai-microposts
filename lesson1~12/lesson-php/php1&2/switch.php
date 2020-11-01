<?php
    $num1 = 8;
    $num2 = 4;
    $opr = '*';

    switch($opr) {
        case '+':
            print $num1 . '+' . $num2 . '=' . ($num1 + $num2) . PHP_EOL;
            break;
        case '-':
            print $num1 . '-' . $num2 . '=' . ($num1 - $num2) . PHP_EOL;
            break;
        case '*':
            print $num1 . '*' . $num2 . '=' . ($num1 * $num2) . PHP_EOL;
            break;
        case '/':
            print $num1 . '/' . $num2 . '=' . ($num1 / $num2) . PHP_EOL;
            break;
        default:
            print 'エラーです' . PHP_EOL;
    }
?>