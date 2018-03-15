<?php

require('functions.php');

echo "<h3>Задание 1.1 </h3><hr><br>";

function fun1($var){
    for ($i=0; $i<=count($var); $i++) {
        echo "<p>" . $var[$i] . "</p>";
    }


}


$str = ["Моя белая лошадка", "Твоя белая лошадка"];

echo fun1($str,$flag);

echo "<h3>Задание 1.2 </h3><hr><br>";

function fun2($var,$flag=false){
    if ($flag) {
        $line = "";
        for ($i=0; $i<=count($var); $i++) {
            $line .= $var[$i];
        }
        $line .= "<br>";
        return $line;
    } else {
        for ($i=0; $i<=count($var); $i++) {
            echo "<p>" . $var[$i] . "</p>";
        }
    }
}

echo fun2($str, true);

echo "<h3>Задание 2 </h3><hr><br>";

function fun3($digits, $var="/") {
    if ($digits) {
        switch ($var) {
            case ('+'):
                for ($i=0; $i<count($digits); $i++) {
                    $sum += $digits[$i];
                };
                break;
            case ('-'):
                for ($i=0; $i<count($digits); $i++) {
                    $sum -= $digits[$i];
                };
                break;
            case ('*'):
                $sum = 1;
                for ($i=0; $i<count($digits); $i++) {
                    $sum *= $digits[$i];
                };
                break;
            case ('/'):
                $sum = 1;
                for ($i=0; $i<count($digits); $i++) {
                    $sum /= $digits[$i];
                };
                break;
            default:
                echo "Укажите правильный арифметический знак ";
        }

        return $sum;
    } else {
        echo "Вы не указали числа";
    }
}

$chisla = [33, 37, 45, 67, 89];
$znak = "+";

echo fun3($chisla, $znak);

echo "<h3>Задание 3 </h3><hr><br>";

function calcFun()
{
    // Массив чисел
    $num = func_get_args();
    // Количество элементов в массиве
    $len = func_num_args();
    // Первый элемент для строки формулы
    $formula = $num[1];
    // Арифметический знак
    $sign = $num[0];
    // Переменная для суммы
    $sum = 0;
    if ($sign == "+") {
             for ($i=2; $i<$len; $i++) {
                // Формируем строку для вывода
                $formula .= $num[0] . $num[$i];
                // Считаем сумму

            }
        }
    $formula .= "=";
    return $formula;
}

echo calcFun("-",23,45,66,89,2,34);
