<?php

/* 
 * Function with default Parameters
 * 
 * @author: DanhNC
 */

function delay($n = 5, $m = 'Hello'){
    for ($ii = 1; $ii <= $n; $ii++){
        echo 1;   
    }
    echo $m;
}
/*
 * use default $n and $m
 */
delay();     //11111Hello

/*
 * use default $m
 */
delay(3);   // 111Hello

/*
 * set value for $n and $m
 */
delay(3,4); //1114