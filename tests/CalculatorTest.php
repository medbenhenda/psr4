<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 24/03/2016
 * Time: 15:53
 */

use Med\Psr4\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function setUp() {
        $this->calc = new Calculator();
    }

    public function inputNumbers()
    {
        return array(
            [10, 8, 2],
            [5, 2.5, 2.5],
            [-15, -10, -5],
        );
    }

    /**
     * @dataProvider inputNumbers
     */
    public function testAddNumbers($sum, $x, $y)
    {
        $this->assertEquals($sum, $this->calc->addNumbers($x, $y));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testThrowsExceptionIfNonNumberIsPassed()
    {
        $this->calc->addNumbers('a', array('t'));
    }
}