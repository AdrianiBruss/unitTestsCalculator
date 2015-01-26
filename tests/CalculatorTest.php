<?php

use Calculator\CalculatorStart;

class CalculatorStartTest extends \PHPUnit_Framework_TestCase{


    protected $calculator;

    // Méthode appelée avant chaque test
    public function setUp(){

        $this->calculator = new CalculatorStart();

    }

    /**
     * @testCalculator
     */
    public function testCalculator(){

//        var_dump(0 == null); => bool(true)
//        var_dump(0 === null); => bool(false)

        $this->assertSame(0, $this->calculator->getResult());

    }

    /**
     * @testAcceptsMultipleArgsToAddNumber
     */
    public function testAcceptsMultipleArgsToAddNumber(){

        $this->calculator->add(1,2,3,4,5,6,7,8,9);
        $this->assertEquals(45, $this->calculator->getResult());

    }

    /*
     * @testMultiply
     */
    public function testMultiply(){

        $this->calculator->multiply(3,2,4);
        $this->assertEquals(24, $this->calculator->getResult());

    }

    /*
     * @testMinus
     *
     */
    public function testMinus(){

        $this->calculator->minus(100,50,25);
        $this->assertEquals(25, $this->calculator->getResult());

    }

}