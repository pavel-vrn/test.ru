<?php

//проверка, является ли число простым
function checkSimpleNumber($number) {
    for ($i = 2; $i <= $number; $i++) {
        if ($number % $i == 0 && $i != $number) {
            return false;
        }
    }
    return true;
}

//вычисление площади трапеции
function trapeziumArea($base1, $base2, $height) {
    $result = ($base1 + $base2) / 2 * $height;
    return $result;
}

               
// возведение в степень
function involution($base, $index) {
    return $base ** $index;
}

//Написать функцию расчета по формуле f=(a*b^c+(((a/c)^b)%3)^min(a,b,c))?, 
//используя написанные ранее функции.
function calcExpression($a, $b, $c) {
    $result = $a * involution($b, $c) + involution ((involution($a / $c, $b) % 3), min($a, $b, $c));
    return $result;
}