<?php

/**
 * Description of Overloading error in PHP
 * @author DanhNC
 */

class testParent{
    public function f1(){
        echo 1;
    }
    
    public function f2(){
        echo 2;
    }
}

class testChild extends testParent{
    function f2(string $a){
        echo $a;
    }
}

$children = new testChild();
$children->f2('Hello'); //'Hello' and show warning
 