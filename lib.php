<?php

function checkSimpleNumber($number) {
    for ($i = 2; $i <= $number; $i++) {
        if ($number % $i == 0 && $i != $number) {
            return false;
        }
    }
    return true;
}

