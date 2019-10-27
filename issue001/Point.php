<?php
namespace issue001;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Point
 *
 * @author nguyenpt
 */
class Point {
    public $x;
    public $y;
    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
}
