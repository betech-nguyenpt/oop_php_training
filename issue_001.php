<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of issue_001
 *
 * @author nguyenpt
 */
class issue_001 {
    public function echoData() {
        return 'abc';
    }
}

$arrX = array();
$arrY = array();

/**
 * Comment of function
 */
function inputPoints() {
    global $arrX, $arrY;
    $arrX = [1, 3, 5, 7, 9];
    $arrY = [2, 4, 6, 8, 10];
}

function distance($i, $j) {
    global $arrX, $arrY;
    return sqrt(pow($arrX[$i] - $arrX[$j], 2) + pow($arrY[$i] - $arrY[$j], 2));
}

function getMaxDistance() {
    global $arrX, $arrY;
    inputPoints();
    $max = distance(0, 0);
    $iMax = 0;
    $jMax = 0;
    for ($ii = 0; $ii < 4; $ii++) {
        for ($jj = $ii + 1; $jj < 5; $jj++) {
            $temp = distance($ii, $jj);
            if ($temp > $max) {
                $max = $temp;
                $iMax = $ii;
                $jMax = $jj;
            }
        }
    }
    return 'Longest line with length: ' . $max . ''
            . ' throught points: (' . $arrX[$iMax] . ', ' . $arrY[$iMax] . ')'
            . ' - (' . $arrX[$jMax] . ', ' . $arrY[$jMax] . ')';
}
