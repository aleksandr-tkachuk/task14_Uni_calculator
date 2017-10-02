<?php
include __DIR__ . '/../calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function testAdd(){
        $this->assertEquals(7,Calculator::add(3,4));
    }

    public function testSubtract(){
        $this->assertEquals(3,Calculator::subtract(15,12));
    }

    public function testMultiply(){
        $this->assertEquals(40,Calculator::multiply(20,2));
    }

    public function testDivide(){
        $this->assertEquals(10,Calculator::divide(20,2));
    }

    public function testSqrt(){
        $this->assertEquals(4.4721359549996,Calculator::sqrt(20));
    }
    public function testPercent(){
        $this->assertEquals( 0.6,Calculator::percent(20,3));
    }

     public function testMr(){
                $count1 = $this->assertEquals( 5,Calculator::add(2, 3));
                $count2 = $this->assertEquals( 12,Calculator::add(5, 7));
                $count3 = $this->assertEquals( 36,Calculator::multiply(4, 9));
                $res = $count1+$count2-$count3;
                $this->assertEquals( $res,Calculator::mr());
     }

    /**
     * @dataProvider providerMr
     */

/*    public function testMr($a, $b, $c, $d)
    {
        $this->assertEquals($d, $a + $b-$c);
    }
    public function providerMr()
    {
        return array(
            array(5, 12, 36, -19)
        );
    }*/

}
//php phpunit.phar --verbose test