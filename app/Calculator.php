<?php

namespace App;

use InvalidArgumentException;

class Calculator {

    /**
     * Add two numbers.
     *
     * @param int|float $v1 The first number.
     * @param int|float $v2 The second number.
     * @return int|float The result of addition.
     */
    function add($v1, $v2) {
        return $v1 + $v2;
    }

    /**
     * Subtract two numbers.
     *
     * @param int|float $v1 The first number.
     * @param int|float $v2 The second number.
     * @return int|float The result of subtraction.
     */
    function sub($v1, $v2) {
        return $v1 - $v2;
    }

    /**
     * Multiply two numbers.
     *
     * @param int|float $v1 The first number.
     * @param int|float $v2 The second number.
     * @return int|float The result of multiplication.
     */
    function mul($v1, $v2) {
        return $v1 * $v2;
    }

    /**
     * Divide two numbers.
     *
     * @param int|float $v1 The dividend.
     * @param int|float $v2 The divisor.
     * @return int|float The result of division.
     * @throws InvalidArgumentException When divisor is zero.
     */
    function div($v1, $v2) {
        if ($v2 == 0) {
            throw new InvalidArgumentException('Division by zero is not allowed');
        }
        return $v1 / $v2;
    }
}
