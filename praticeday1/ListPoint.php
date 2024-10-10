<?php
namespace Praticeday1;

require_once('Point.php');

use Praticeday1\Point;

class ListPoint {
    public $points = [];

    // Constructor
    public function __construct() {
        $arrX = [1, 3, 5, 7, 9];
        $arrY = [2, 4, 6, 8, 10];

        // Create a Point object and store it in the $points array
        for ($ii = 0; $ii < count($arrX); $ii++) {
            $this->points[$ii] = new Point($arrX[$ii], $arrY[$ii]);
        }
    }

    // Calculate the distance between two points
    public function distance($i, $j) {
        return sqrt(pow($this->points[$i]->x - $this->points[$j]->x, 2)
            + pow($this->points[$i]->y - $this->points[$j]->y, 2));
    }

   
    public function getMaxDistance() {
        $max = $this->distance(0, 1); 
        $iMax = 0;
        $jMax = 1;

        // Compare the distance between all pairs of points
        for ($ii = 0; $ii < count($this->points) - 1; $ii++) {
            for ($jj = $ii + 1; $jj < count($this->points); $jj++) {
                $temp = $this->distance($ii, $jj);
                if ($temp > $max) {
                    $max = $temp;
                    $iMax = $ii;
                    $jMax = $jj;
                }
            }
        }

        return 'Longest line with length: ' . $max . '<br>'
            . 'Through points: (' . $this->points[$iMax]->x . ', ' . $this->points[$iMax]->y . ')'
            . ' - (' . $this->points[$jMax]->x . ', ' . $this->points[$jMax]->y . ')';
    }
}


$listPoint = new ListPoint();
echo $listPoint->getMaxDistance();

//Result : Longest line with length: 11.313708498985<br>Through points: (1, 2) - (9, 10)

?>
