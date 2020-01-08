<?php

use PHPUnit\Framework\TestCase;
include_once("src/FibonacciCalculator.php");
class FibonacciCalculatorHiddenTest extends TestCase {

    protected static $calc;

    public static function setUpBeforeClass()
    {
      static::$calc = new FibonacciCalculator();
    }

    public function testCalculate_1() {
	$this->assertEquals(377, static::$calc->calculate(14));
    }

    public function testCalculate_2() {
	$this->assertEquals(610, static::$calc->calculate(15));
    }

    public function testCalculate_3() {
	$this->assertEquals(2584, static::$calc->calculate(18));
    }

    public function testCalculate_4() {
	$this->assertEquals(4181, static::$calc->calculate(19));
    }		

}
