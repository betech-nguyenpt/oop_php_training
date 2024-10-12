<?php
namespace TrainingOOP1;

require_once('Point.php');

use TrainingOOP1\Point;

class ListPoint {
    public $points = []; // Array to store Point objects

    /**
     * ListPoint constructor
     * Initializes the list with predefined points
     */
    public function __construct() {
        $arrX = [1, 3, 5, 7, 9]; // X coordinates
        $arrY = [2, 4, 6, 8, 10]; // Y coordinates

        // Create Point objects and store them in the $points array
        for ($ii = 0; $ii < count($arrX); $ii++) {
            $this->points[$ii] = new Point($arrX[$ii], $arrY[$ii]);
        }
    }

    /**
     * Calculate the distance between two points
     * @param int $i Index of the first point
     * @param int $j Index of the second point
     * @return float The distance between the two points
     */
    public function distance($i, $j) {
        return sqrt(pow($this->points[$i]->x - $this->points[$j]->x, 2)
            + pow($this->points[$i]->y - $this->points[$j]->y, 2));
    }

    /**
     * Get the maximum distance between any two points in the list
     * @return string Description of the longest distance and the points involved
     */
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

        // Return the result with formatted output
        return sprintf('Longest line with length: %.2f<br>Through points: (%d, %d) - (%d, %d)', 
            $max, 
            $this->points[$iMax]->x, 
            $this->points[$iMax]->y, 
            $this->points[$jMax]->x, 
            $this->points[$jMax]->y
        );
    }
}

$listPoint = new ListPoint();
printf($listPoint->getMaxDistance()); // Output the result
?>
