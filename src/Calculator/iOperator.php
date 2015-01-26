<?php

namespace Calculator;


interface iOperator {

    public function run($num, $current);
    public function getFirstCurrent();

} 