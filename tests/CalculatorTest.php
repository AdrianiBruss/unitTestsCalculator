<?php

use Calculator\CalculatorStart;

class CalculatorStartTest extends \PHPUnit_Framework_TestCase{


    protected $calculator;

    // Méthode appelée avant chaque test
    public function setUp(){

        $this->calculator = new CalculatorStart();

    }

    /**
     * @test Calculator
     */
    public function testCalculator(){

//        var_dump(0 == null); => bool(true)
//        var_dump(0 === null); => bool(false)

        $this->assertSame(0, $this->calculator->getResult());

    }

    /**
     * @test AcceptsMultipleArgsToAddNumber
     */
    public function testAcceptsMultipleArgsToAddNumber(){

        $this->calculator->add(1,2,3,4,5,6,7,8,9);
        $this->assertEquals(45, $this->calculator->getResult());

    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testRequireNumberValue(){

        $this->calculator->add('five');

    }

    /**
     * @test Multiply
     */
    public function testMultiply(){

        $this->calculator->multiply(1,2,3,4);
        $this->assertEquals(24, $this->calculator->getResult());

    }

    /**
     * @test Minus
     *
     */
    public function testMinus(){

        $this->calculator->minus(100,50,25);
        $this->assertEquals(25, $this->calculator->getResult());

    }

}