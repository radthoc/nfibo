<?php

namespace App;

class Fibonacci implements FibonacciInterface
{
    private $series = [0, 1];

    /**
     * @param int $number
     * @return int
     */
    public function getNumber(int $number): int
    {
        if ($number < 3) {
            return $number;
        }

        return sprintf('%u', $this->getFiboNumber($number));
    }

    /**
     * @param int $number
     * @return float
     */
    private function getFiboNumber(int $number): float
    {
        return round(((5 ** .5 + 1) / 2) ** $number / 5 ** .5);
    }
}
