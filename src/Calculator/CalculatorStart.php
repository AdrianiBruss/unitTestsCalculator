<?php

namespace Calculator;

class CalculatorStart{

    protected $total = 0;

    public function __construct(){


    }

    public function add(){

        $args = func_get_args();

        foreach($args as $arg){

            $this->total += $arg;

        }


    }

    public function minus(){

        $args = func_get_args();

        foreach($args as $arg){

            $this->total -= $arg;

        }


    }

    public function multiply(){

        $args = func_get_args();

        foreach($args as $arg){

            $this->total *= $arg;

        }

    }

    public function getResult(){

        return $this->total;

    }

}