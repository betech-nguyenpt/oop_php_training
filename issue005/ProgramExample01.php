<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Example01.php';

$p0 = new Point(300, 300);
$p1 = new Point(30, 30);
$p2 = new Point(30, 150);
$p3 = new Point(150, 150);
$p4 = new Point(20, 60);
$p5 = new Point(970, 30);
$p6 = new Point(970, 90);
$p7 = new Point(880, 90);
$p8 = new Point(880, 30);


$circle = new Circle($p0, 50);
$circle->print();

$triangle = new Triangle($p1, $p2, $p3);

$rectangle = new Rectangle($p5, $p6, $p7, $p8);
$circleList = new ListCicle([$p0, $p1, $p2, $p3], [20, 30, 35, 50]);
$circleList->print();
?>

</canvas>
<script>
    <?= $circle->draw('gray'); ?>
    <?= $triangle->draw('red');?>    
    
</script>

