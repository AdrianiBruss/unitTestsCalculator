<?php
/**
 * Created by PhpStorm.
 * User: adrienbrussolo
 * Date: 26/01/15
 * Time: 15:33
 */

namespace Calculator;


class Multiplication implements iOperator {

    protected $firstCurrent = 1;

    public function run($num, $current){

        if ($current == 0){



        }

        return $num * $current;

    }

    public function getFirstCurrent(){

        return $this->firstCurrent;

    }

} 