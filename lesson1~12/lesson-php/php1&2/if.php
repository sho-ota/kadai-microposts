<?php
    $num1 = 8;
    $num2 = 4;
    $opr = '*';

    if ($opr == '+') {
        print $num1 . '+' . $num2 . '=' . ($num1 + $num2) . PHP_EOL;
    }
    elseif ($opr == '-') {
        print $num1 . '-' . $num2 . '=' . ($num1 - $num2) . PHP_EOL;
    }
    elseif ($opr == '*') {
        print $num1 . '*' . $num2 . '=' . ($num1 * $num2) . PHP_EOL;
    }
    elseif ($opr == '/') {
        print $num1 . '/' . $num2 . '=' . ($num1 / $num2) . PHP_EOL;
    }
    else {
        print 'エラーです' . PHP_EOL;
    }
?>