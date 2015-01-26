<?php
/**
 * Created by PhpStorm.
 * User: adrienbrussolo
 * Date: 26/01/15
 * Time: 14:47
 */

namespace Calculator;


class Division implements iOperator{


    public function run($num, $current){

        if ($current == 0){
            throw new \InvalidArgumentException('No / by 0');
        }

        return rand($num/$current);

    }

} 