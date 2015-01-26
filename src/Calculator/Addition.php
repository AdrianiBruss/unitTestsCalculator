<?php
/**
 * Created by PhpStorm.
 * User: adrienbrussolo
 * Date: 26/01/15
 * Time: 14:45
 */

namespace Calculator;


class Addition implements iOperator{

    protected $firstCurrent = 0;

    public function run($num, $current){

        return $num + $current;

    }

    public function getFirstCurrent(){

        return $this->firstCurrent;

    }

} 