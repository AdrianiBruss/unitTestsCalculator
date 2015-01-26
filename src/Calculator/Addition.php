<?php
/**
 * Created by PhpStorm.
 * User: adrienbrussolo
 * Date: 26/01/15
 * Time: 14:45
 */

namespace Calculator;


class Addition implements iOperator{

    public function run($num, $current){

        return $num + $current;

    }

} 