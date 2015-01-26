<?php
/**
 * Created by PhpStorm.
 * User: adrienbrussolo
 * Date: 26/01/15
 * Time: 14:47
 */

namespace Calculator;


class Division implements iOperator{

    protected $firstCurrent = 1;

    public function run($num, $current){

        if ($current == 0){

            throw new \InvalidArgumentException('No / by 0');
        }

        return $num / $current;

    }

    public function getFirstCurrent(){

        return $this->firstCurrent;

    }

} 