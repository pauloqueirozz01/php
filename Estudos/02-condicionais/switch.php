<?php

echo "Digite um número de 1 a 7: \n";
$day = $argv[1] ?? 1;

switch ($day) {
    case 1:
        echo "Você digitou $day \n";
        $nameDay = "Sunday";
        break;
    case 2:
        echo "Você digitou $day \n";
        $nameDay = "Monday";
        break;
    case 3:
        echo "Você digitou $day \n";
        $nameDay = "Tuesday";
        break;
    case 4:
        echo "Você digitou $day \n";
        $nameDay = "Wednesday";
        break;
    case 5:
        echo "Você digitou $day \n";
        $nameDay = "Thursday";
        break;
    case 6:
        echo "Você digitou $day \n";
        $nameDay = "Friday";
        break;
    case 7:
        echo "Você digitou $day \n";
        $nameDay = "Saturday";
        break;
}

echo "O dia da semana equivalente a esse número é: $nameDay";

