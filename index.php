<?php
require_once('issue_001.php');
require_once('issue001/ListPoints.php');
use issue001\ListPoints;

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo 'Function programming:';
        echo '<br/>';
        echo getMaxDistance();
        echo '<br/>';
        echo 'Object Oriented programming:';
        echo '<br/>';
        $listPoint = new ListPoints();
        echo $listPoint->getMaxDistance();
        echo 'TanTy';
        echo '<br/>';
        echo 'NgocTan';
        echo '<br/>';
        ?>
    </body>
</html>
