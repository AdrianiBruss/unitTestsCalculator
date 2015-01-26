<?php

//use Calculator\CalculatorStart;
use Calculator\Calculator;
use Calculator\Addition;
use Calculator\Division;
use Calculator\Multiplication;

class CalculatorStartTest extends \PHPUnit_Framework_TestCase{


    protected $calculator;

    // Méthode appelée avant chaque test
    public function setUp(){

//        $this->calculator = new CalculatorStart();
        $this->calculator = new Calculator();

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
//    public function testAcceptsMultipleArgsToAddNumber(){

//        $this->calculator->add(1,2,3,4,5,6,7,8,9);
//        $this->assertEquals(45, $this->calculator->getResult());

//    }

    /**
     * @expectedException InvalidArgumentException
     */
//    public function testRequireNumberValue(){

//        $this->calculator->add('five');

//    }

    /**
     * @test Multiply
     */
//    public function testMultiply(){

//        $this->calculator->multiply(1,2,3,4);
//        $this->assertEquals(24, $this->calculator->getResult());

//    }

    /**
     * @test Minus
     *
     */
//    public function testMinus(){

//        $this->calculator->minus(100,50,25);
//        $this->assertEquals(25, $this->calculator->getResult());

//    }


    /**
     * @test AddNumber
     */
    public function testAddNumber(){

        $this->calculator->setOperation(new Addition);
        $this->calculator->setOperands(1,2,3);

        $this->calculator->calculate();

        $this->assertEquals(6, $this->calculator->getResult());
    }


    /**
     * @test DivNumber
     * @expectedException InvalidArgumentException
     */
    public function testDivNumber(){

        $this->calculator->setOperation(new Division);
        $this->calculator->setOperands(10,2);

        $this->calculator->calculate();

        $this->assertEquals(5, $this->calculator->getResult());
    }

    public function testMultiplicationNumber(){

        $this->calculator->setOperation(new Multiplication);
        $this->calculator->setOperands(2,3);

        $this->calculator->calculate();

        $this->assertEquals(6, $this->calculator->getResult());

    }


}