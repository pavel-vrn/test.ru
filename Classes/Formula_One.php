<?php
/**
 * Created by PhpStorm.
 * User: batis
 * Date: 31.08.2018
 * Time: 21:16
 */

class Formula_One
{
    private function involution($base, $index) {
        return $base ** $index;
    }

    /**
     * @param $a
     * @param $b
     * @param $c
     * @return float|int|mixed
     */
    public function calcFormulaOne($a, $b, $c) {
        $result = $a * $this->involution($b, $c) + $this->involution (($this->involution($a / $c, $b) % 3), min($a, $b, $c));
        return $result;
    }
}