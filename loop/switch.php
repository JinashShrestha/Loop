<?php

    $x=10;
    $y=20;
    $sign='*';

    switch ($sign)
    {
        case '+':
            $c=$x+$y;
            echo "$c";
            break;
        case '-':
            $c=$x-$y;
            echo "$c";
            break;
        case '*':
            $c=$x*$y;
            echo "$c";
            break;
        case '/':
            $c=$x/$y;
            echo "$c";
            break;
        case '%':
            $c=$x%$y;
            echo "$c";
            break;
        default:
            echo "Operator not defined";
    }