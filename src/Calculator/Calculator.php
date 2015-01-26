<?php
/**
 * Created by PhpStorm.
 * User: adrienbrussolo
 * Date: 26/01/15
 * Time: 14:51
 */

namespace Calculator;


class Calculator {

    protected $operands = [];
    protected $operation;
    protected $result = 0;
    protected $current;

    public function setOperands(){

        $this->operands = func_get_args();

    }

    public function setOperation(iOperator $operation){

        $this->operation = $operation;
        $this->result = $operation->getFirstCurrent();

    }


    public function getResult(){

        return $this->result;

    }

    public function calculate(){

        foreach($this->operands as $num){

            if (!is_numeric($num)){
                throw new \InvalidArgumentException(sprintf('(%s), is not numeric', $num));
            }


            $this->result = $this->operation->run($num, $this->result);

        }

    }

} 