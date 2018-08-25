<?php

function checkSimpleNumber($number) {
    for ($i = 2; $i <= $number; $i++) {
        if ($number % $i == 0 && $i != $number) {
            return false;
        }
    }
    return true;
}

function trapeziumArea($base1, $base2, $height) {
    $result = ($base1 + $base2) / 2 * $height;
    return $result;
}

