<?php

use PHPUnit\Framework\TestCase;
include_once("src/FibonacciCalculator.php");
class FibonacciCalculatorTest extends TestCase {

    protected static $calc;

    public static function setUpBeforeClass(): void
    {
      static::$calc = new FibonacciCalculator();
    }

    public function testCalculate_1() {
	$this->assertEquals(0, static::$calc->calculate(0));
    }

    public function testCalculate_2() {
	$this->assertEquals(5, static::$calc->calculate(5));
    }

    public function testCalculate_3() {
	$this->assertEquals(6765, static::$calc->calculate(20));	
    }

    public function testCalculate_4() {
	$this->assertEquals(75025, static::$calc->calculate(25));	
    }		

}
