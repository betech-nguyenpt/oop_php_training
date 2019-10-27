<?php
namespace issue001;

require_once('Point.php');

use issue001\Point;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ListPoints
 *
 * @author nguyenpt
 */
class ListPoints {
    /**
     *
     * @var Point
     */
    public $points = [];
    
    function __construct() {
        $arrX = [1, 3, 5, 7, 9];
        $arrY = [2, 4, 6, 8, 10];
        for ($ii = 0; $ii < count($arrX); $ii++) {
            $this->points[] = new Point($arrX[$ii], $arrY[$ii]);
        }
    }
    
    function distance($i, $j) {
        return sqrt(pow($this->points[$i]->x - $this->points[$j]->x, 2)
                + pow($this->points[$i]->y - $this->points[$j]->y, 2));
    }
    
    function getMaxDistance() {
        $max = $this->distance(0, 0);
        $iMax = 0;
        $jMax = 0;
        for ($ii = 0; $ii < 4; $ii++) {
            for ($jj = $ii + 1; $jj < 5; $jj++) {
                $temp = $this->distance($ii, $jj);
                if ($temp > $max) {
                    $max = $temp;
                    $iMax = $ii;
                    $jMax = $jj;
                }
            }
        }
        return 'Longest line with length: ' . $max . ''
                . ' throught points: (' . $this->points[$iMax]->x . ', ' . $this->points[$iMax]->y . ')'
                . ' - (' . $this->points[$jMax]->x . ', ' . $this->points[$jMax]->y . ')';
    }
}
