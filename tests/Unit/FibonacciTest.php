<?php

namespace Tests\Unit;

use App\Fibonacci;
use Tests\TestCase;

class FibonacciTest extends TestCase
{
    /**
     * @dataProvider NumbersProvider
     *
     * @param int $number
     * @param int $expectedNumber
     */
    public function testGetNumber(int $number, int $expectedNumber)
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals($expectedNumber, $fibonacci->getNumber($number));
    }

    public function NumbersProvider()
    {
        return [
            [7, 13],
            [5, 5],
            [11, 89],
            [15, 610],
            [19, 4181],
            [20, 6765],
            [21, 10946],
            [28, 317811],
            [33, 3524578],
            [59, 956722026041],
        ];
    }
}
