<?php
require_once('issue_001.php');

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
        echo '123';
        $issue001 = new issue_001();
        echo $issue001->echoData();
        echo '<br/>';
        echo getMaxDistance();
        ?>
    </body>
</html>
